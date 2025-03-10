<?php
session_start();
if(!$_SESSION["loggedin"]) {
	header("Location:index.php");
}
if ( !has_access("amxadmins_view") ) {
	header("Location:index.php");
	exit;
}
$admin_site="um";
$title2 ="_TITLEUSERMENU";

global $config;

//change menu position function
function menu_change_pos($mid,$pos,$pos_new) {
	global $config;
	//"save" menupoint to change to a "temp" position
	$query = mysql_query("UPDATE `".$config->db_prefix."_usermenu` SET `pos`=0 WHERE `id`=".$mid." LIMIT 1") or die (mysql_error());
	
	if($pos==$pos_new-1 || $pos==$pos_new+1) {
		//pos_new one lower or higher (arrows)
		$query = mysql_query("UPDATE `".$config->db_prefix."_usermenu` SET `pos`=`pos`".(($pos_new < $pos)?"+":"-")."1 
			WHERE `pos`=".$pos_new." LIMIT 1") or die (mysql_error());
	} else {
		//pos_new more than one lower or higher (input)
		$query = mysql_query("UPDATE `".$config->db_prefix."_usermenu` SET `pos`=`pos`".(($pos_new < $pos)?"+":"-")."1 
			WHERE `pos`".(($pos_new < $pos)?"<":">").$pos." AND `pos`".(($pos_new < $pos)?">=":"<=").$pos_new) or die (mysql_error());
	}
	//set new position from changed menupoint
	$query = mysql_query("UPDATE `".$config->db_prefix."_usermenu` SET `pos`=".$pos_new." WHERE `id`= ".$mid." LIMIT 1") or die (mysql_error());
	
	#log_to_db("Usermenu config","Changed menu: position ".$pos." -> ".$pos_new);
}

if(isset($_POST["mid"])) {
	$mid=(int)$_POST["mid"];
} else {
	$mid="";
}

//delete menu
if(isset($_POST["del"])) {
	if ( !has_access("amxadmins_view") ) {
		header("Location:index.php");
		exit;
	}
	$query = mysql_query("DELETE FROM `".$config->db_prefix."_usermenu` WHERE `id`=".$mid." LIMIT 1") or die (mysql_error());
	$user_msg='_USERMENUDELETED';
	log_to_db("Usermenu config","Deleted menu: ID: ".$mid);
}
	
//new menu
if(isset($_POST["new"])) {
	if ( !has_access("amxadmins_view") ) {
		header("Location:index.php");
		exit;
	}
	$query = mysql_query("INSERT INTO `".$config->db_prefix."_usermenu` 
							(`pos`,`activ`,`url`,`lang_key`,`url2`,`lang_key2`) 
							VALUES 
							(".(int)$_POST["pos"].",1,
							'".mysql_real_escape_string($_POST["url"])."',
							'".mysql_real_escape_string($_POST["lang_key"])."',
							'".mysql_real_escape_string($_POST["url2"])."',
							'".mysql_real_escape_string($_POST["lang_key2"])."'
							)") or die (mysql_error());
	$user_msg='_USERMENUADDED';
	log_to_db("Usermenu config","Added menu");
}

//change position with button
if(isset($_POST["pos_up_x"]) || isset($_POST["pos_dn_x"])) {
	$pos=(int)$_POST["pos"];
	$pos_new=$pos;
	if(isset($_POST["pos_up_x"])) $pos_new--;
	if(isset($_POST["pos_dn_x"])) $pos_new++;
	
	menu_change_pos($mid,$pos,$pos_new);
	
	$user_msg='_USERMENUPOSSAVED';
}
//save menu
if(isset($_POST["save"])) {
	if ( !has_access("amxadmins_view") ) {
		header("Location:index.php");
		exit;
	}
		//if position changed, save
		//if((int)$_POST["pos"]!==(int)$_POST["pos_new"]) {
		if(!(isset($_POST["mid"]))) {
			menu_change_pos($mid,(int)$_POST["pos"],(int)$_POST["pos_new"]);
		}
		$query = mysql_query("UPDATE `".$config->db_prefix."_usermenu` SET 
					`activ`=".(isset($_POST["activ"])?1:0).",
					`url`='".mysql_real_escape_string($_POST["url"])."',
					`lang_key`='".mysql_real_escape_string($_POST["lang_key"])."',
					`url2`='".mysql_real_escape_string($_POST["url2"])."',
					`lang_key2`='".mysql_real_escape_string($_POST["lang_key2"])."'
					WHERE `id`=".$mid." LIMIT 1") or die (mysql_error());
		$user_msg='_USERMENUSAVED';
		log_to_db("Usermenu config","Edited menu: ID ".$mid);
}
//get complete menu
$menu2=sql_get_usermenu($count);

//activate changes
include("include/menu.inc.php");

$activ_choose=array("no","yes");
$smarty->assign("activ_choose",$activ_choose);
$smarty->assign("menu_count",$count);
$smarty->assign("menu2",$menu2);
	
?>