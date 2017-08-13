<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED)); 
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
 echo"<script type=\"text/javascript\">".
	"window.alert('Certain fields are blank! Please fill it up to continue.');".
	"top.location = 'koyomoldadmin.php';".
	"</script>"; 
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$connection = mysql_connect("localhost", "root", "");
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$db = mysql_select_db("koyo", $connection);
$query = mysql_query("select * from adminuser where password= sha1('$password') AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; 
header("location: loadingscreenadmin.php");
} else if ($rows == 0) {
 echo"<script type=\"text/javascript\">".
	"window.alert('Invalid username and password!!');".
	"top.location = 'koyomoldadmin.php';".
	"</script>"; 
}
mysql_close($connection);
}
}
?>