<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js" type = "text/javascript"></script>
<link rel="stylesheet" href="css/usertbl.css">
<link rel="stylesheet" href="jquery-ui-1.11.2/jquery-ui.css">
<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
<script language = "javascript" type="text/javascript">
$(document).ready(function() {
	
    $("#searchtextuser").keyup(function(event){
		oTable = $("#usertable").dataTable();
        oTable.fnFilter($(this).val());
		event.preventDefault();
    });

	$('#usertable').dataTable({
        "order": [[ 3, "asc" ]]
    });
});
</script>
<script language = "javascript" type="text/javascript">
function runner(row) {
	var x = row.cells;
    document.getElementById('userid').value = x[0].innerHTML;
    document.getElementById('username').value = x[1].innerHTML;
    document.getElementById('first').value = x[3].innerHTML;
    document.getElementById('maiden').value = x[4].innerHTML;
    document.getElementById('last').value = x[5].innerHTML;
	document.getElementById('bday').value = x[6].innerHTML;
	document.getElementById('position').value = x[7].innerHTML;
}
</script>
</head>
<tbody>
<?php
	require 'usernamesconstring.php';
	$query = mysql_query("SELECT * FROM {$tbl_name}");
?>
<div class = "userdb">
<div class = "searchdis">
<input type = "search" placeholder = "SEARCH" size = "25" id = "searchtextuser" style = "color:black;">
</div>
<table id="usertable">
<thead>
	<tr>
	<th>User ID</th>
	<th>Username</th>
	<th>Password</th>
	<th>First Name</th>
	<th>Maiden Name</th>
	<th>Surname</th>
	<th>Birthday</th>
	<th>Position</th>
	</tr>
</thead>
<tbody>
<form>
<?php

while($row = mysql_fetch_array($query))
{
	$userid = $row['id'];
	$user = $row['username'];
	$pass = $row['password'];
	$first = $row['firstname'];
	$maiden = $row['maiden'];
	$last = $row['lastname'];
	$birthdey = $row['birthday'];
	$posi = $row['position'];
?>

<tr class = "declick" onclick = "javascript:runner(this);">
<td><?php echo $userid; ?></td>
<td><?php echo $user; ?></td>
<td><?php echo $pass; ?></td>
<td><?php echo $first; ?></td>
<td><?php echo $maiden; ?></td>
<td><?php echo $last; ?></td>
<td><?php echo $birthdey; ?></td>
<td><?php echo $posi; ?></td>
</tr>
</div>
<?php
}
?>
</form>
</tbody>
</table>
</div>
</html>

