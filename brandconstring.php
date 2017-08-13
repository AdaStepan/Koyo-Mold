<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="koyo"; // Database name 
$tbl_name="brand"; // Table name 


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name");

if (!mysql_connect($host, $username, $password))
    die("Can't connect to database");
if (!mysql_select_db($db_name))
    die("Can't select database");

?>