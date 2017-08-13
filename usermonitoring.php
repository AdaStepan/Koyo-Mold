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
    $('#SEARCHu').click(function(event){
		var ser = $("#searchtextu").val();
		if (ser == ''){
			alert('Fill up the search box!');
			location.reload();
			return false;
		} else {
		oTable = $('#linktable1').dataTable();
        oTable.fnFilter($("#searchtextu").val());
		event.preventDefault();
		}
    });

	$('#CLEAR').click(function(event){
		yTable = $('#linktable1').dataTable();
        yTable.fnFilter("");
		$('#searchtextu').val('')
		event.preventDefault();
    });

	$('#linktable1').dataTable({
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
require 'usernamesconstring.php';
$query = mysql_query("SELECT * FROM {$tbl_name}");
?>
<div id = "userdb">
<table id="linktable1">
<thead>
	<tr>
	<th>User Id #</th>
	<th>Username</th>
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
	$useridu = $row['id'];
	$usernameu = $row['username'];
	$firstu = $row['firstname'];
	$maidenu = $row['maiden'];
	$lastu = $row['lastname'];
	$birthdayu = $row['birthday'];
	$positionu = $row['position'];
?>
<tr>
<td><?php echo $useridu; ?></td>
<td><?php echo $usernameu; ?></td>
<td><?php echo $firstu; ?></td>
<td><?php echo $maidenu; ?></td>
<td><?php echo $lastu ; ?></td>
<td><?php echo $birthdayu; ?></td>
<td><?php echo $positionu; ?></td>
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

