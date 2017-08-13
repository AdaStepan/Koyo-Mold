<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js" type = "text/javascript"></script>
<link rel="stylesheet" href="css/deleteadmin.css">
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
		oTable = $('#deletetbladmin').dataTable();
        oTable.fnFilter($("#searchtextde").val());
		event.preventDefault();
		}
    });
	$('#CLEARde').click(function(event){
		yTable = $('#deletetbladmin').dataTable();
        yTable.fnFilter("");
		$('#searchtextde').val('')
		$('#checkbx').val('')
		event.preventDefault();
    });

	$('#deletetbladmin').dataTable({
        "order": [[ 3, "asc" ]]
    });
});
</script>

<script type = "text/javascript">
$(document).ready(function(){
$("#deletetbladmin #allcheck").click(function(){
	if ($("#deletetbladmin #allcheck").is(':checked')){
		$("#deletetbladmin input[type=checkbox]").each(function(){
			$(this).prop("checked", true);
		});
	} else {
		$("#deletetbladmin input[type=checkbox]").each(function(){
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
				location.reload();
				return true;
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
<h1>DELETE ADMIN USER</h1>
<div class = "deleteadmin">
<form name="deletion" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return validate();">
<table id = "deletetbladmin">
<thead>
	<tr>
	<th>User Id.</th>
	<th>Username</th>
	<th>First Name</th>
	<th>Maiden Name</th>
	<th>Last Name</th>
	<th>Birthday</th>
	<th>Reason</th>
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
<button type = "submit" name = "deletor" style = "width: 57px; height: 57px; left: 500px; text-align: right; position: relative;"><p class = "deletebtn" /></p></button>
<?php
require 'userconstring.php';
$query = "SELECT * FROM adminuser";
$result = mysql_query($query);
$count = mysql_num_rows($result);
?>
<?php
while($row=mysql_fetch_array($result)){
	$userid = $row['id'];
	$user = $row['username'];
	$first = $row['firstname'];
	$maiden = $row['maiden'];
	$last = $row['lastname'];
	$birthdey = $row['birthday'];
	$reas = $row['reason'];
?>
<tr>
<td><?php echo $userid; ?></td>
<td><?php echo $user; ?></td>
<td><?php echo $first; ?></td>
<td><?php echo $maiden; ?></td>
<td><?php echo $last; ?></td>
<td><?php echo $birthdey; ?></td>
<td><?php echo $reas; ?></td>
<td><input type = "checkbox" style = "width:20px; height:20px;" name = "checkbx[]" id = "checkbx[]" value = "<?php echo $userid; ?>"></td>
</tr>
</div>
<?php
}
?>

<?php
if(isset($_POST['deletor'])){
for($i=0;$i<count($_POST['checkbx']);$i++){
	$del_id=$_POST['checkbx'][$i];
	$sql = "DELETE FROM $tbl_name WHERE id='$del_id'";
	$result = mysql_query($sql);
	if($result){
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=admindelete.php\">";
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