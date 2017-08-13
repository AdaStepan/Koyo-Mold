<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js" type = "text/javascript"></script>
<link rel="stylesheet" href="css/search.css">
<script src = "../../media/js/jquery.js"></script>
<script src = "../../media/js/jquery.dataTables.js"></script>
</head>
<body>
<?php {}
require 'connectionstring.php';
?>
<div class = "productdb">
<table id="link-table">
</br>
<?php

$query = mysql_query("SELECT * FROM {$tbl_name}");
	
$fields = mysql_num_fields($query);
	echo "<table border='2' height='20'>";
	for($i=0; $i<$fields; $i++)
	{
		$field = mysql_fetch_field($query);
		echo "<td>{$field->name}</td>";
	}

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
	$metalgauge = $row['metalgauge'];
	$rubberhard = $row['rubberhard'];
	$diecutter = $row['diecutter'];
	$rubberweight = $row['rubberweight'];
	$curringtime = $row['curringtime'];
	$note = $row['note'];
?>
<tr class = "Highlight">
<td onclick="javascript:changeParent()"><?php echo $moldno; ?></td>
<td onclick="javascript:changeParent()"><?php echo $kind; ?></td>
<td onclick="javascript:changeParent()"><?php echo $metricsize; ?></td>
<td onclick="javascript:changeParent()"><?php echo $inchesize; ?></td>
<td onclick="javascript:changeParent()"><?php echo $partno; ?></td>
<td onclick="javascript:changeParent()"><?php echo $customer; ?></td>
<td onclick="javascript:changeParent()"><?php echo $brand; ?></td>
<td onclick="javascript:changeParent()"><?php echo $type; ?></td>

<td onclick="javascript:changeParent()"><?php echo $material; ?></td>
<td onclick="javascript:changeParent()"><?php echo $noofcavity; ?></td>
<td onclick="javascript:changeParent()"><?php echo $diecutter; ?></td>
<td onclick="javascript:changeParent()"><?php echo $metalgauge; ?></td>
<td onclick="javascript:changeParent()"><?php echo $rubberhard; ?></td>
<td onclick="javascript:changeParent()"><?php echo $rubberweight; ?></td>
<td onclick="javascript:changeParent()"><?php echo $curringtime; ?></td>
<td><input type="button" value="NOTE" id="note_input_<?php echo $note; ?>" /&gt;</td>
</tr>

<?php
}
?>
</table>
</div>
<script language = "javascript">
function run() {
    var t = document.getElementById('myTable');
    var rows = t.rows; //rows collection - https://developer.mozilla.org/en-US/docs/Web/API/HTMLTableElement
    for (var i=0; i<rows.length; i++) {
        rows[i].onclick = function () {
            if (this.parentNode.nodeName == 'THEAD') {
                return;
            }
            var cells = this.cells; //cells collection
            var f1 = document.getElementById('firstname');
            var f2 = document.getElementById('lastname');
            var f3 = document.getElementById('age');
            var f4 = document.getElementById('total');
            var f5 = document.getElementById('discount');
            var f6 = document.getElementById('diff');
            f1.value = cells[0].innerHTML;
            f2.value = cells[1].innerHTML;
            f3.value = cells[2].innerHTML;
            f4.value = cells[3].innerHTML;
            f5.value = cells[4].innerHTML;
            f6.value = cells[5].innerHTML;
        };
    }
}
</script>
</body>
</html>

