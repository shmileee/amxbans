<?php

/* 	

	AMXBans v6.0
	
	Copyright 2009, 2010 by SeToY & |PJ|ShOrTy

	This file is part of AMXBans.

    AMXBans is free software, but it's licensed under the
	Creative Commons - Attribution-NonCommercial-ShareAlike 2.0

    AMXBans is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

    You should have received a copy of the cc-nC-SA along with AMXBans.  
	If not, see <http://creativecommons.org/licenses/by-nc-sa/2.0/>.

*/

function return_bytes($val) {
	$val = trim($val);
	$last = strtolower($val[strlen($val)-1]);
	switch($last) {
		// The 'G' modifier is available since PHP 5.1.0
		case 'g':
			$val *= 1024;
		case 'm':
			$val *= 1024;
		case 'k':
			$val *= 1024;
	}

	return $val;
}

function is__writable($path) {
//will work in despite of Windows ACLs bug
//NOTE: use a trailing slash for folders!!!
	if ($path{strlen($path)-1}=='/') // recursively return a temporary file path
		return is__writable($path.uniqid(mt_rand()).'.tmp');
	else if (is_dir($path))
		return is__writable($path.'/'.uniqid(mt_rand()).'.tmp');

	// check tmp file for read/write capabilities
	$rm = file_exists($path);
	$f = @fopen($path, 'a');
	if ($f===false)
		return false;

	fclose($f);
	if (!$rm)
		unlink($path);
	return true;
}

function sql_get_privilege() {
	$privileges=array();
	//global privileges
		$query=mysql_query("SHOW GRANTS FOR CURRENT_USER()") or die (mysql_error());
		$array=mysql_fetch_assoc($query);
		foreach($array as $k => $v) {
			if(stristr($v,"ALL PRIVILEGES")) { $privileges=array("SELECT","INSERT","UPDATE","DELETE","CREATE");break; }
			if(stristr($v,"SELECT")) $privileges[]="SELECT";
			if(stristr($v,"INSERT")) $privileges[]="INSERT";
			if(stristr($v,"UPDATE")) $privileges[]="UPDATE";
			if(stristr($v,"DELETE")) $privileges[]="DELETE";
			if(stristr($v,"CREATE")) $privileges[]="CREATE";
			//maybe later needed for upgrades
			//if(stristr($v,"ALTER")) $privileges[]="ALTER";
			//if(stristr($v,"DROP")) $privileges[]="DROP";
		}
	//database privileges	
		$ressource=mysql_select_db("INFORMATION_SCHEMA") or die (mysql_error());
		$db=mysql_real_escape_string($_SESSION["dbdb"]);
		//fix for plesk
		$db2=str_replace("_","\_",$db);
		$query=mysql_query("SELECT * FROM `SCHEMA_PRIVILEGES` WHERE `GRANTEE`LIKE'\'".($_SESSION["dbuser"])."\'%' AND `TABLE_SCHEMA`='".$db."' OR `TABLE_SCHEMA`='".$db2."' OR `TABLE_SCHEMA`='mysql'") or die (mysql_error());
		while ($result = mysql_fetch_object($query)) {
			$privileges[]=$result->PRIVILEGE_TYPE;
		}
	return $privileges;
}
function sql_connect() {
	$mysql=@mysql_connect($_SESSION["dbhost"],$_SESSION["dbuser"],$_SESSION["dbpass"]) or $msg="_CANTCONNECT";
	if(!$msg) $ressource=@mysql_select_db($_SESSION["dbdb"]) or $msg="_CANTSELECTDB";
	if($msg) return false;
	return true;
}
function sql_create_table($table,$structure) {
	$query=@mysql_query("CREATE TABLE `".$table."` (".$structure.") ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");
	//	if(!$query) return ("_ALREADYEXISTS");
		if(!$query) return mysql_error();
	return ("_CREATED");
}
function sql_insert_data($table,$data) {
	$query=@mysql_query("INSERT INTO `".$table."` ".$data);
		if(!$query) return ("_FAILED");
	return ("_INSERTED");
}
function sql_insert_setting($sqlquery) {
	$query=@mysql_query($sqlquery);
		if(!$query) return ("_FAILED");
	return ("_INSERTED");
}
function write_cfg_file($file,$content) {
	if(!file_exists($file)) {
		if($fh = fopen($file,"w")) {
			fputs($fh,$content);
			fclose($fh);
			return "_FILESUCCESS";
		} else {
			return "_FILEOPENERROR";
		}
	} else {
		return "_FILEEXISTS";
	}
}
