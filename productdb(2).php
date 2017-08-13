<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js" type = "text/javascript"></script>
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="jquery-ui-1.11.2/jquery-ui.css">
<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script language = "javascript" type="text/javascript">
function run(row) {
	var x = row.cells;
    window.opener.document.getElementById('mold').value = x[0].innerHTML;
    window.opener.document.getElementById('kind').value = x[1].innerHTML;
    window.opener.document.getElementById('metric').value = x[2].innerHTML;
    window.opener.document.getElementById('inches').value = x[3].innerHTML;
    window.opener.document.getElementById('part').value = x[4].innerHTML;
    window.opener.document.getElementById('customer').value = x[5].innerHTML;
	window.opener.document.getElementById('brand').value = x[6].innerHTML;
	window.opener.document.getElementById('type').value = x[7].innerHTML;
	window.opener.document.getElementById('material').value = x[8].innerHTML;
	window.opener.document.getElementById('cavity').value = x[9].innerHTML;
	window.opener.document.getElementById('diecutter').value = x[10].innerHTML;
	window.opener.document.getElementById('metalg').value = x[11].innerHTML;
	window.opener.document.getElementById('rhard').value = x[12].innerHTML;
	window.opener.document.getElementById('rweight').value = x[13].innerHTML;
	window.opener.document.getElementById('ctime').value = x[14].innerHTML;
	window.opener.document.getElementById('stickynote').value = x[15].innerHTML;
	window.close();
}
</script>

</head>
<tbody>
<?php {}
require 'connectionstring.php';
$query = mysql_query("SELECT * FROM {$tbl_name}");
?>
<div class = "productdb">
<table id="link-table">
<thead>
	<tr>
	<?php
	$fields = mysql_num_fields($query);
	echo "<table border='2' height='20'>";
	for($i=0; $i<$fields; $i++)
	{
		$field = mysql_fetch_field($query);
		echo "<td>{$field->name}</td>";
	}
	?>
	</tr>
</thead>
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
<tr onclick = "javascript:run(this);">
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
<td class = "nota" style = "display:none;"><?php echo $note; ?></td>
<td class = "notebutton"><input type = "button" onclick = "if (event.stopPropagation){
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
</table>
</div>
</tbody>
</html>

