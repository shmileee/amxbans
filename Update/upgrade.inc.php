<?php
session_start();

require_once("include/sql.inc.php");
require_once("include/db.config.inc.php");


$step = isset($_GET['step']) ? abs((int)$_GET['step']) : 0;

if ((!isset($_SESSION['authok']) && $step != 1) || !$step)
	die();

switch ($step)
{
	case 1:
		if (!isset($_GET['login']) ||
			!isset($_GET['password']) ||
			$_GET['login'] != $config->db_user ||
			$_GET['password'] != $config->db_pass)
		{
			echo json_encode(array('result' => false, 'message' => 'Bledne dane!'));
			break;
		}
		else
		{
			$_SESSION['authok'] = true;
			echo json_encode(array('result' => true, 'message' => 'Dane prawidlowe!'));
			break;
		}
	case 2:
		$error = '';
		$config->db_host=@gethostbyname($config->db_host);
		$mysql = @mysql_connect($config->db_host,$config->db_user,$config->db_pass);
		if (!$mysql)
			$error = mysql_error();
		else
		{
			$resource = @mysql_select_db($config->db_db);
			if (!$resource)
				$error = mysql_error();
			else
			{
				mysql_query("ALTER TABLE `{$config->db_prefix}_bans` ADD  `cs_ban_reason` varchar( 100 ) NULL DEFAULT NULL AFTER  `ban_reason`");
			}
		}
		if (!$error)
			echo json_encode(array('result' => true, 'message' => 'Upgrade ok! <a href="index.php">Kliknij</a> aby przejsc do AMXBansa...'));
		else
			echo json_encode(array('result' => false, 'message' => $error));
		break;
}

?>