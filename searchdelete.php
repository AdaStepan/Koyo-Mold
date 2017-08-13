<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js" type = "text/javascript"></script>
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="jquery-ui-1.11.2/jquery-ui.css">
<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
<script type = "text/javascript">
$(document).ready(function() {
	
    $('#SEARCHde').click(function(event){
		var ser = $("#searchtextde").val();
		if (ser == ''){
			alert('Fill up the search box!');
			location.reload();
			return false;
		} else {
		oTable = $('#deletetable').dataTable();
        oTable.fnFilter($("#searchtextde").val());
		event.preventDefault();
		}
    });
	$('#CLEARde').click(function(event){
		yTable = $('#deletetable').dataTable();
        yTable.fnFilter("");
		$('#searchtextde').val('')
		$('#checkbx').val('')
		event.preventDefault();
    });

	$('#deletetable').dataTable({
        "order": [[ 3, "asc" ]]
    });
});
</script>

<script type = "text/javascript">
$(document).ready(function(){
$("#deletetable #allcheck").click(function(){
	if ($("#deletetable #allcheck").is(':checked')){
		$("#deletetable input[type=checkbox]").each(function(){
			$(this).prop("checked", true);
		});
	} else {
		$("#deletetable input[type=checkbox]").each(function(){
			$(this).prop("checked", false);
		});
	}
  });
  $("[data-toggle=tooltip]").tooltip();
});
</script>
<script language="javascript">
function validate(){
	var chks = document.getElementsByName('checkbx[]');
	var hasChecked = false;
	for (var i = 0; i < chks.length; i++){
		if (chks[i].checked){
			var x = confirm("Are you sure you want to delete the particular row?");
			hasChecked = true;
			if (x){
				alert("Row/s has been deleted.");
				return true;
				location.reload();
				break;
			} else {
				alert("Please re-select checkbox of your choice.");
				location.reload();
				return false;
				break;
				
			}
		}
	}
	if (hasChecked == false){
		alert("Please select at least one.");
		location.reload();
		return false;
	}
	return true;
}
</script>
</head>
<h1>DELETE A PRODUCT</h1>
<div class = "deletedb">
<form name="deletion" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return validate();">
<table id = "deletetable">
<thead>
	<tr>
	<th>Mold No.</th>
	<th>Kind.</th>
	<th>Metric Size</th>
	<th>Inches Size</th>
	<th>Part No.</th>
	<th>Customer</th>
	<th>Brand</th>
	<th>Type</th>
	<th>Material</th>
	<th>No. of Cavity</th>
	<th>Die Cutter</th>
	<th>Metal Gauge</th>
	<th>Rubber Hard</th>
	<th>Rubber Weight</th>
	<th>Curring Time</th>
	<th style = "display:none;">Note</th>
	<th><input type = "checkbox" style = "width:20px; height:20px;" id = "allcheck"></th>
	</tr>
</thead>
<tbody>
<p class = "searchformde" id = "searchformde">
<input type = "search" placeholder = "SEARCH" size = "25" id = "searchtextde">
</br>
</br>
<input type = "submit" id="SEARCHde" value="SEARCH">
<input type = "submit" id="CLEARde" value="CLEAR">
</br>
</br>
</br>
<button type = "submit" name = "deletor"  class = "deletebtn" style = "width: 60px; height: 60px; left: 570px; text-align: right; position: relative;"></button>
<?php
require 'mainconnectionstring.php';
$query = "SELECT * FROM productdb";
$result = mysql_query($query);
$count = mysql_num_rows($result);
?>
<?php
while($row=mysql_fetch_array($result)){
	$moldno = $row['moldno'];
	$kind = $row['kind'];
	$metricsize = $row['metricsize'];
	$inchesize = $row['inchesize'];
	$partno = $row['partno'];
	$customer = $row['customer'];
	$brand = $row['brand'];
	$type = $row['type'];
	$material = $row['material'];
	$noofcavity = $row['noofcavity'];
	$diecutter = $row['diecutter'];
	$metalgauge = $row['metalgauge'];
	$rubberhard = $row['rubberhard'];
	$rubberweight = $row['rubberweight'];
	$curringtime = $row['curringtime'];
?>
<tr>
<td><?php echo $moldno; ?></td>
<td><?php echo $kind; ?></td>
<td><?php echo $metricsize; ?></td>
<td><?php echo $inchesize; ?></td>
<td><?php echo $partno; ?></td>
<td><?php echo $customer; ?></td>
<td><?php echo $brand; ?></td>
<td><?php echo $type; ?></td>
<td><?php echo $material; ?></td>
<td><?php echo $noofcavity; ?></td>
<td><?php echo $diecutter; ?></td>
<td ><?php echo $metalgauge; ?></td>
<td><?php echo $rubberhard; ?></td>
<td><?php echo $rubberweight; ?></td>
<td><?php echo $curringtime; ?></td>
<td style = "display:none;"><?php echo $note; ?></td>
<td><input type = "checkbox" style = "width:20px; height:20px;" name = "checkbx[]" id = "checkbx[]" value = "<?php echo $moldno; ?>"></td>
</tr>
</div>
<?php
}
?>

<?php
if(isset($_POST['deletor'])){
for($i=0;$i<count($_POST['checkbx']);$i++){
	$del_id=$_POST['checkbx'][$i];
	$sql = "DELETE FROM $tbl_name WHERE moldno='$del_id'";
	$result = mysql_query($sql);
	if($result){
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=searchdelete.php\">";
		exit;
	}
  }
}
mysql_close();
?>
</tbody>
</form>
</table>
</div>
</html>