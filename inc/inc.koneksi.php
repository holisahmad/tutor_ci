<?php
define('db_host','localhost');
define('db_user','root');
define('db_pass','it55wss');
define('db_name','brorizdb');
	
$db = new mysqli(db_host,db_user,db_pass,db_name);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}	
?>