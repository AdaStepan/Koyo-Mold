<?php
require 'userconstring.php';
if(isset($_POST['submit'])) {
 $userid = $_POST['user_id'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $repass = $_POST['retype'];
 $firstname = $_POST['firstn'];
 $maidename = $_POST['middlei'];
 $lastname = $_POST['lastn'];
 $birthdate = $_POST['birthday'];
 $position	= $_POST['position'];
 
 if (!empty($userid) && !empty($username) && !empty($password) && !empty($firstname) && !empty($lastname) && !empty($birthdate) && !empty($position)){
	 if ($password == $repass){
		$query = mysql_query ("SELECT * FROM user WHERE username='$username'");
		if(mysql_num_rows($query) ==  0){
			$query2 = mysql_query("INSERT INTO user(id, username, password, firstname, maiden, lastname, birthday) VALUES ('$userid', '$username', sha1('$password'), '$firstname', '$maidename', '$lastname', '$birthdate')");
			echo"<script type=\"text/javascript\">".
			"window.alert('User has been added!');".
			"top.location = 'registerpage.php';".
			"</script>"; 
		} else {
			echo"<script type=\"text/javascript\">".
			"window.alert('Username exists already!');".
			"top.location = 'registerpage.php';".
			"</script>"; 
		}
}
 else if (is_numeric($username) || is_numeric($position) || is_numeric($birthdate) || is_numeric($firstname) || is_numeric($lastname)){
  echo"<script type=\"text/javascript\">".
	"window.alert('Required fields need a valid value!');".
	"top.location = 'registerpage.php';".
	"</script>"; 
 } 
 else if (empty($username) || empty($lastname) || empty($retype) || empty($birthdate)  ||  empty($position)) {
	 echo"<script type=\"text/javascript\">".
	"window.alert('Fill up all the required fields!');".
	"top.location = 'registerpage.php';".
	"</script>"; 
 } 
}
}
?>


