<?php
require 'mainconnectionstring.php';
$result = mysql_query("SELECT * FROM {$tbl_name}");
if(isset($_POST['submit'])) {
 $kind = $_POST['ekind'];
 $metric = $_POST['emetric'];
 $inches = $_POST['einches'];
 $part = $_POST['epart'];
 $customer = $_POST['ecustomerid'];
 $brand = $_POST['ebrand'];
 $type	= $_POST['etype'];
 $material = $_POST['ematerial'];
 $cav = $_POST['ecavity'];
 $die = $_POST['ediecutter'];
 $metal = $_POST['emetalg'];
 $hard = $_POST['erhard'];
 $weight = $_POST['erweight'];
 $ctime = $_POST['ectime'];
 $note = $_POST['estickynote'];
 while($row = mysql_fetch_array($result))
{
 $moldno = $row['moldno'];
}
 if (empty($kind) == FALSE && empty($metric) == FALSE  || empty($inches) == FALSE  && empty($part) == FALSE && empty($customer) == FALSE && !empty($brand) && empty($type) == FALSE && empty($material) == FALSE){
 
 $query = mysql_query("UPDATE productdb SET kind='".$kind."', metricsize='".$metric."', inchesize='".$inches."', partno='".$part."', customer='".$customer."', metricsize='".$metric."', brand='".$brand."', type='".$type."', material='".$material."', noofcavity ='".$cav."', diecutter='".$die."', metalgauge='".$metal."', rubberhard='".$hard."', rubberweight='".$weight."', curringtime='".$ctime."', note='".$note."'  WHERE moldno = '".$moldno."'");
 echo"<script type=\"text/javascript\">".
	"window.alert('Data Updated');".
	"top.location = 'edit.php';".
	"</script>"; 
 } 
 else if (is_numeric($metric) == TRUE || is_numeric($inches) == TRUE || is_numeric($kind) == TRUE|| is_numeric($customer) == TRUE|| is_numeric($brand) == TRUE|| is_numeric($type) == TRUE|| is_numeric($material) == TRUE){
  echo"<script type=\"text/javascript\">".
	"window.alert('invalid data!');".
	"top.location = 'edit.php';".
	"</script>"; 
 } 
 else if (empty($kind) || empty($metric) || empty($inches) || empty($part) && empty($customer) || empty($brand) || empty($type) || empty($material)) {
	 echo"<script type=\"text/javascript\">".
	"window.alert('Fill up all the required fields!');".
	"top.location = 'edit.php';".
	"</script>"; 
 } 
 else if (is_numeric($part) == FALSE|| is_numeric($cav) == FALSE || is_numeric($die) == FALSE|| is_numeric($metal) == FALSE|| is_numeric($hard) == FALSE|| is_numeric($weight) == FALSE|| is_numeric($ctime) == FALSE){
  echo"<script type=\"text/javascript\">".
	"window.alert('invalid data!');".
	"top.location = 'edit.php';".
	"</script>"; 
 }
}
?>


