<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("koyo", $connection);
session_start();// Starting Session
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select username from user where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: MoldMonitoring.php'); // Redirecting To Home Page
}
?>