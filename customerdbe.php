<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js" type = "text/javascript"></script>
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="jquery-ui-1.11.2/jquery-ui.css">
<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
	
    $("#searchtext").keyup(function(event){
		oTable = $('#custtable2').dataTable();
        oTable.fnFilter($("#searchtext").val());
		event.preventDefault();
    });

	$('#custtable2').dataTable({
        "order": [[ 3, "asc" ]]
    });
});
</script>
<script language = "javascript" type="text/javascript">
		function run(row) {
			var x = row.cells;
			document.getElementById('ecustomerid').value = x[1].innerHTML;
		};
</script>
</head>
<?php
	require 'customerconstring.php';
	$query = mysql_query("SELECT * FROM {$tbl_name}");
?>
<div class = "custdb2">
<p class = "searchform" id = "ditableform" style = "text-align: center; left: 230px; color:black;">
<input type = "search" placeholder = "SEARCH" size = "25" id = "searchtext" style = "color:black;">
</br>
</br>
</p>
<table id="custtable2">
<thead>
	<tr class = "rows">
	<th>ID</th>
	<th>CUSTOMER</th>
	<th>ADDRESS</th>
	<th>CONTACT NO.</th>
	</tr>
</thead>
<tbody>
<form>
<?php

while($row = mysql_fetch_array($query))
{
	$id = $row['id'];
	$customer = $row['customer'];
	$address = $row['address'];
	$contact = $row['contactno'];
?>
<tr class = "declickcustom" onclick = "javascript:run(this);">
<td><?php echo $id; ?></td>
<td><?php echo $customer; ?></td>
<td><?php echo $address; ?></td>
<td><?php echo $contact; ?></td>
</tr>
</div>
<?php
}
?>
</form>
</tbody>
</html>