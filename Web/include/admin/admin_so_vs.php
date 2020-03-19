<?php
session_start();
if(!$_SESSION["loggedin"]) {
	header("Location:index.php");
}
if ( !has_access("amxadmins_view") ) {
	header("Location:index.php");
	exit;
}
$admin_site="vs";
$title2 ="_TITLEUPDATE";

$update_ip="version.gm-community.net"; 
$update_user="gm_amxbans";
$update_pw="fdT3jyhc";
$update_db="amxbans";

$error = array();

//get version from servers
$query=mysql_query("SELECT `hostname`,`address`,`amxban_version` FROM `".$config->db_prefix."_serverinfo` ORDER BY `hostname`") or die(mysql_error());
$version_server=array();
$server_count = "";
while($result = mysql_fetch_object($query)) {
	$version=array(
		"hostname"=>$result->hostname,
		"address"=>$result->address,
		"version"=>$result->amxban_version
	);
	$version_server[]=$version;
	$server_count++;
}
$smarty->assign("server_count",$server_count);
$smarty->assign("version_server",$version_server);


//get versions from update db
@$mysql_upd = mysql_connect($update_ip,$update_user,$update_pw) or $error[]="_UPD_CONNECT_ERROR";
if($mysql_upd) {
	$resource = mysql_select_db($update_db,$mysql_upd) or $error[]="_UPD_DB_ERROR";
	if(!$error) {	
		//get newest web versions info
		$query = mysql_query("SELECT * FROM `version` WHERE `for`='web' ORDER BY `release` DESC LIMIT 1",$mysql_upd) or $error[]="_UPD_SELECT_ERROR";
		while($result = mysql_fetch_object($query)) {
			$version=array(
				"release"=>$result->release,
				"beta"=>$result->beta,
				"recommended_to"=>$result->recommended_to,
				"changelog"=>$result->changelog,
				"url"=>$result->url
			);
		}
		$smarty->assign("version_db_web",$version);
		//get newest plugin versions info
		$query = mysql_query("SELECT * FROM `version` WHERE `for`='plugin' ORDER BY `release` DESC LIMIT 1",$mysql_upd) or $error[]="_UPD_SELECT_ERROR";
		while($result = mysql_fetch_object($query)) {
			$version=array(
				"release"=>$result->release,
				"beta"=>$result->beta,
				"recommended_to"=>$result->recommended_to,
				"changelog"=>$result->changelog,
				"url"=>$result->url
			);
		}
		$smarty->assign("version_db_plugin",$version);
	}
	mysql_close($mysql_upd);
}
$smarty->assign("error",$error);
?>