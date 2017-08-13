<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js" type = "text/javascript"></script>
<link rel="stylesheet" href="css/usersadmin.css">
<link rel="stylesheet" href="jquery-ui-1.11.2/jquery-ui.css">
<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="tableExport/tableExport.js"></script>
<script type="text/javascript" src="tableExport/jquery.base64.js"></script>
<script type = "text/javascript">
$(document).ready(function() {
    $('#SEARCHa').click(function(event){
		var ser = $("#searchtexta").val();
		if (ser == ''){
			alert('Fill up the search box!');
			location.reload();
			return false;
		} else {
		oTable = $('#linktable2').dataTable();
        oTable.fnFilter($("#searchtexta").val());
		event.preventDefault();
		}
    });

	$('#CLEARa').click(function(event){
		yTable = $('#linktable2').dataTable();
        yTable.fnFilter("");
		$('#searchtexta').val('')
		event.preventDefault();
    });

	$('#linktable2').dataTable({
        "order": [[ 3, "desc" ]]
    });
});
</script>

<script type = "text/javascript">
jQuery('document').ready(function() {
        jQuery('#dialog-link', 'td').unbind('click').click(function(event) {
            var not = $(this).closest("tr").find('td:eq(15)').html();
			alert(not);
			return false;
			event.preventDefault();
      })
 });
jQuery( "#dialog-link, #icons li" ).hover(
	function() {
		jQuery( this ).addClass( "ui-state-hover" );
	},
	function() {
		jQuery( this ).removeClass( "ui-state-hover" );
	}
);
</script>
</head>
<?php {}
require 'userconstring.php';
$query = mysql_query("SELECT * FROM {$tbl_name}");
?>
<div id = "userdb">
<table id="linktable2">
<thead>
	<tr>
	<th>User Id #</th>
	<th>Username</th>
	<th>First Name</th>
	<th>Maiden Name</th>
	<th>Surname</th>
	<th>Birthday</th>
	<th>Reason</th>
	</tr>
</thead>
<tbody>
<form>
<?php

while($row = mysql_fetch_array($query))
{
	$userida = $row['id'];
	$usernamea = $row['username'];
	$firsta = $row['firstname'];
	$maidena = $row['maiden'];
	$lasta = $row['lastname'];
	$birthdaya = $row['birthday'];
	$reason = $row['reason'];
?>
<tr>
<td><?php echo $userida; ?></td>
<td><?php echo $usernamea; ?></td>
<td><?php echo $firsta; ?></td>
<td><?php echo $maidena; ?></td>
<td><?php echo $lasta; ?></td>
<td><?php echo $birthdaya; ?></td>
<td><?php echo $reason; ?></td>
</div>
</div>
</td>
</tr>
<?php
}
?>
</form>
</tbody>
</table>
</div>
</html>

