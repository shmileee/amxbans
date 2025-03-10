<?php
session_start();

if($_SESSION["loggedin"]) {
	header("Location:index.php");
}

require_once("include/config.inc.php");
require_once("include/functions.inc.php");

$max_trys=3;		//max trys to login before the user is blocked
$max_trys_block=10;	//minutes to block login after max_trys wrong logins
 
if(isset($_POST["action"])) {
	global $config;
	
	$uname = sql_safe($_POST["user"]);
	$upass = sql_safe($_POST["pass"]);
	if(!$uname || !$upass) {
		$_SESSION["loginfailed"]++;
		#$msg="_NOREQUIREDFIELDS";
		$msg="_LOGINFAILED";
	}
	
	if(!$msg) {
		$mysql = mysql_connect($config->db_host,$config->db_user,$config->db_pass) or die (mysql_error());
		$resource = mysql_select_db($config->db_db) or die (mysql_error());

		//check if username exists
		$query = mysql_query("SELECT last_action,try FROM `".$config->db_prefix."_webadmins` WHERE username='$uname' LIMIT 1");
		if(mysql_num_rows($query)) {
			$result = mysql_fetch_object($query);
			$try=$result->try;
			$last_action=$result->last_action;
			
			//check if username is blocked
			if($try >= $max_trys) {
				if($last_action+($max_trys_block*60) > time()) {
					$msg="_LOGINBLOCKED";
					$block_left=$last_action+($max_trys_block*60)-time();
					$loginblocked=true;
				} else {
					//delete wrong trys
					$query2 = mysql_query("UPDATE `".$config->db_prefix."_webadmins` SET `try`=0 WHERE username='$uname' LIMIT 1");
					$try=0;
				}
			} 
			if(!$loginblocked) {
				//check username and password
				$query = mysql_query("SELECT id,level,email FROM `".$config->db_prefix."_webadmins` WHERE username='$uname' AND password=MD5('$upass') LIMIT 1");
				if(mysql_num_rows($query)) {
					$_SESSION["loginfailed"]=0;
					//login ok
					$uremember = $_POST["remember"];
					if($uremember=="yes") {
						//set cookie, 7 days valid
						setcookie($config->cookie,session_id().":".$_SESSION["lang"],time()+(60*60*24*7),"/",$_SERVER["HTTP_HOST"]);
					}
					$result = mysql_fetch_object($query);
					
					$_SESSION["uid"]=$result->id;
					$_SESSION["uname"]=$uname;
					$_SESSION["email"]=$result->email;
					$_SESSION["level"]=$result->level;
					$_SESSION["sid"]=session_id();
					$_SESSION["loggedin"]=true;
						
					$query = mysql_query("SELECT * FROM `".$config->db_prefix."_levels` WHERE level=".$_SESSION["level"]." LIMIT 1");
					while($result = mysql_fetch_object($query)) {
						$_SESSION['bans_add'] = $result->bans_add;
						$_SESSION['bans_edit'] = $result->bans_edit;
						$_SESSION['bans_delete'] = $result->bans_delete;
						$_SESSION['bans_unban'] = $result->bans_unban;
						$_SESSION['bans_import'] = $result->bans_import;
						$_SESSION['bans_export'] = $result->bans_export;
						$_SESSION['amxadmins_view'] = $result->amxadmins_view;
						$_SESSION['amxadmins_edit'] = $result->amxadmins_edit;
						$_SESSION['webadmins_view'] = $result->webadmins_view;
						$_SESSION['webadmins_edit'] = $result->webadmins_edit;
						$_SESSION['websettings_view'] = $result->websettings_view;
						$_SESSION['websettings_edit'] = $result->websettings_edit;
						$_SESSION['permissions_edit'] = $result->permissions_edit;
						$_SESSION['prune_db'] = $result->prune_db;
						$_SESSION['servers_edit'] = $result->servers_edit;
						$_SESSION['ip_view'] = $result->ip_view;
					}
					$query = mysql_query("UPDATE `".$config->db_prefix."_webadmins` SET `logcode`='".session_id()."',`last_action`=UNIX_TIMESTAMP(),`try`=0 WHERE `id`=".$_SESSION["uid"]);
					#$msg="_LOGINOK";
					header("Location:index.php");
					exit;
				} else {
					$_SESSION["loginfailed"]++;
					//login wrong, add a wrong login try to the user
					require_once("include/logfunc.inc.php");
					
					$try++;
					$_SESSION["uname"]=$uname;
					log_to_db("Login failed",($try==$max_trys)?"login blocked (".$max_trys_block." minutes)":"login failed (try: ".$try."/".$max_trys.")");
					$msg="_LOGINFAILEDPW";
					$loginfailed=true;
					
					if($try<$max_trys) {
						$query = @mysql_query("UPDATE `".$config->db_prefix."_webadmins` SET `try`=".$try.",`logcode`=NULL WHERE username='$uname' LIMIT 1");
					} else {
						$query = @mysql_query("UPDATE `".$config->db_prefix."_webadmins` SET `try`=".$try.",`logcode`=NULL,`last_action`=UNIX_TIMESTAMP() WHERE username='$uname' LIMIT 1");
						$msg="_LOGINBLOCKED";
						$block_left=$max_trys_block*60;
						$loginblocked=true;
					}
				}
			}
		} else {
			$_SESSION["loginfailed"]++;
			$msg="_LOGINFAILED";
		}
	}
}
require_once("include/menu.inc.php");

/*
 * Template parsing
 */



$title			= "_TITLELOGIN";

// Section
$section = "login";

$smarty = new dynamicPage;

$smarty->assign("meta","");
$smarty->assign("title",$title);
$smarty->assign("section",$section);
$smarty->assign("banner",$config->banner);
$smarty->assign("banner_url",$config->banner_url);
$smarty->assign("version_web",$config->v_web);
$smarty->assign("dir",$config->document_root);
$smarty->assign("this",$_SERVER['PHP_SELF']);
$smarty->assign("menu",$menu);
$smarty->assign("msg",$msg);

if($loginblocked) {
	$smarty->assign("block_left",$block_left);
} else if($loginfailed) {
	$smarty->assign("try",$try);
}

if(file_exists("templates/".$config->design."/main_header.tpl")) {
	$smarty->assign("design",$config->design);
}

$smarty->display('main_header.tpl');
$smarty->display('login.tpl');
$smarty->display('main_footer.tpl');
?>