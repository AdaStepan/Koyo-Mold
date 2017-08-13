<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js" type = "text/javascript"></script>
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="jquery-ui-1.11.2/jquery-ui.css">
<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
<script language = "javascript" type="text/javascript">
$(document).ready(function() {
	
    $("#searchtext2").keyup(function(event){
		oTable = $("#prodtable").dataTable();
        oTable.fnFilter($(this).val());
		event.preventDefault();
    });

	$('#prodtable').dataTable({
        "order": [[ 3, "asc" ]]
    });
});
</script>
<script language = "javascript" type="text/javascript">
function runner(row) {
	var x = row.cells;
    document.getElementById('emold').value = x[0].innerHTML;
    document.getElementById('ekind').value = x[1].innerHTML;
    document.getElementById('emetric').value = x[2].innerHTML;
    document.getElementById('einches').value = x[3].innerHTML;
    document.getElementById('epart').value = x[4].innerHTML;
    document.getElementById('ecustomerid').value = x[5].innerHTML;
	document.getElementById('ebrand').value = x[6].innerHTML;
	document.getElementById('etype').value = x[7].innerHTML;
	document.getElementById('ematerial').value = x[8].innerHTML;
	document.getElementById('ecavity').value = x[9].innerHTML;
	document.getElementById('ediecutter').value = x[10].innerHTML;
	document.getElementById('emetalg').value = x[11].innerHTML;
	document.getElementById('erhard').value = x[12].innerHTML;
	document.getElementById('erweight').value = x[13].innerHTML;
	document.getElementById('ectime').value = x[14].innerHTML;
	document.getElementById('estickynote').value = x[15].innerHTML;
}
</script>
</head>
<tbody>
<?php
	require 'mainconnectionstring.php';
	$query = mysql_query("SELECT * FROM {$tbl_name}");
?>
<div class = "proddb">
<p class = "searchform" id = "searchdrpdwn2" style = "text-align: center; left: 520px; color:black;">
<input type = "search" placeholder = "SEARCH" size = "25" id = "searchtext2" style = "color:black;">
</p>
<table id="prodtable">
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
	<th>Note</th>
	</tr>
</thead>
<tbody>
<form>
<?php

while($row = mysql_fetch_array($query))
{
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
	$note = $row['note'];
?>
<tr class = "declick" onclick = "javascript:runner(this);">
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
<td><?php echo $metalgauge; ?></td>
<td><?php echo $rubberhard; ?></td>
<td><?php echo $rubberweight; ?></td>
<td><?php echo $curringtime; ?></td>
<td style = "display:none;"><?php echo $note; ?></td>
<td><input type = "button" onclick = "if (event.stopPropagation){
	event.stopPropagation();
} event.cancelBubble = true;
   return true;" id="dialog-link" class="ui-state-default ui-corner-all" value = "NOTE" /&gt;><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-11" style="position: absolute; height: auto; width: 400px; top: 587px; left: 429px; display: none;" />
<button type="button" role="button" title="Close">
<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
<div class="ui-dialog-buttonset">
<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">OK</span></button>
</div>
</td>
</tr>
<script>
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
</div>
<?php
}
?>
</form>
</tbody>
</table>
</div>
</html>

