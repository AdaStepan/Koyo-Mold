<?php
require 'userconstring.php';
if(isset($_POST['submit'])) {
 $moldno = $_POST['amold'];
 $kind = $_POST['akind'];
 $metric = $_POST['ametric'];
 $inches = $_POST['ainch'];
 $part = $_POST['apart'];
 $customer = $_POST['acustomerid'];
 $brand = $_POST['abrand'];
 $type	= $_POST['atype'];
 $material = $_POST['amaterial'];
 $cav = $_POST['acavity'];
 $die = $_POST['adiecutter'];
 $metal = $_POST['ametalg'];
 $hard = $_POST['arhard'];
 $weight = $_POST['arweight'];
 $ctime = $_POST['actime'];
 $note = $_POST['astickynote'];
 
 if (!empty($moldno) && !empty($kind) && (!empty($metric) || !empty($inches)) && !empty($customer) && !empty($brand) && !empty($type) && !empty($material)){
 
 $query = mysql_query("INSERT INTO productdb(moldno, kind, metricsize, inchesize, partno, customer, brand, type, material, noofcavity, diecutter, metalgauge, rubberhard, rubberweight, curringtime, note) VALUES ('$moldno', '$kind', '$metric', '$inches', '$part', '$customer', '$brand', '$type', '$material', '$cav', '$die', '$metal', '$hard', '$weight', '$ctime', '$note')");
 echo"<script type=\"text/javascript\">".
	"window.alert('1 row of data has been added');".
	"top.location = 'add.php';".
	"</script>"; 
 } 
 else if (is_numeric($moldno) || is_numeric($metric) || is_numeric($inches) || is_numeric($kind) || is_numeric($customer) || is_numeric($brand) || is_numeric($type) || is_numeric($material) ){
  echo"<script type=\"text/javascript\">".
	"window.alert('No/invalid data!');".
	"top.location = 'add.php';".
	"</script>"; 
 } 
 else if (empty($moldno) || empty($kind) || empty($metric) || empty($inches)  ||  empty($customer) || empty($brand) || empty($type) || empty($material)) {
	 echo"<script type=\"text/javascript\">".
	"window.alert('Fill up all the required fields!');".
	"top.location = 'add.php';".
	"</script>"; 
 } 
 else if (!is_numeric($part) || !is_numeric($cav) || !is_numeric($die) || !is_numeric($metal) || !is_numeric($hard) || !is_numeric($weight)  || !is_numeric($ctime)){
  echo"<script type=\"text/javascript\">".
	"window.alert('No/invalid data!');".
	"top.location = 'add.php';".
	"</script>"; 
 } 
}
?>


