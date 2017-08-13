<?php
require 'userconstring.php';
$result = mysql_query("SELECT * FROM {$tbl_name}");
if(isset($_POST['submit'])) {
 $id = $_POST['userid'];
 $user = $_POST['username'];
 $pass = $_POST['password'];
 $firstn = $_POST['first'];
 $maidenn = $_POST['maiden'];
 $lastn = $_POST['last'];
 $birthd = $_POST['bday'];
 $res = $_POST['reason'];
 while($row = mysql_fetch_array($result))
{
 $dbid = $row['id'];
}
 if (empty($id) == FALSE && empty($user) == FALSE && empty($pass) == FALSE  && empty($firstn) == FALSE  && empty($maidenn) == FALSE && empty($lastn) == FALSE &&  empty($birthd) == FALSE && !empty($res)){
 $query = mysql_query("UPDATE adminuser SET username='".$user."', password=sha1('$pass'), firstname='".$firstn."', maiden='".$maidenn."', lastname='".$lastn."', birthday='".$birthd."', reason='".$res."'  WHERE id = '".$id."'");
 echo"<script type=\"text/javascript\">".
	"window.alert('Data Updated');".
	"top.location = 'editadmin.php';".
	"</script>"; 
 } 
 else if (is_numeric($user) == TRUE || is_numeric($birthd) == TRUE || is_numeric($res) == TRUE|| is_numeric($firstn) == TRUE|| is_numeric($lastn) == TRUE|| is_numeric($maidenn) == TRUE){
  echo"<script type=\"text/javascript\">".
	"window.alert('invalid data!');".
	"top.location = 'editadmin.php';".
	"</script>"; 
 } 
 else if (empty($user) || empty($pass) || empty($firstn) || empty($maidenn) || empty($lastn) || empty($birthd) || empty($res)) {
	 echo"<script type=\"text/javascript\">".
	"window.alert('Fill up all the required fields!');".
	"top.location = 'editadmin.php';".
	"</script>"; 
 } 
  else if (empty($id)) {
	 echo"<script type=\"text/javascript\">".
	"window.alert('Fill up all the required fields!');".
	"top.location = 'editadmin.php';".
	"</script>"; 
 } 
 
}
?>


