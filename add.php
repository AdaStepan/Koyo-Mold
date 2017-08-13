<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js"></script>
<link rel="stylesheet" href="css/add.css">
<link rel="stylesheet" href="jquery-ui-1.11.2/jquery-ui.css">
<script language = "javascript" type="text/javascript">
function dropdownkind(data) {
	document.getElementById ("akind").value = data.value;
}
function dropdownmet(data) {
	document.getElementById ("ametric").value = data.value;
}
function dropdowninches(data) {
	document.getElementById ("ainch").value = data.value;
}
function dropdownbrand(data) {
	document.getElementById ("abrand").value = data.value;
}
function dropdowntype(data) {
	document.getElementById ("atype").value = data.value;
}
function dropdownmaterial(data) {
	document.getElementById ("amaterial").value = data.value;
}
</script>
</head>
<body>
<h1>ADD A PRODUCT</h1>
	
		<form method = 'POST' action = "processadd.php"> 
		<div class = "othertextbox">
		<label for="mold">Mold No:</label>
		<input type="text" name="amold" id="amold" style = "text-transform: uppercase;">
		</br>
		</br>
		<div>
		<label for="kind">Kind:</label>
		<input type="text" name="akind" id="akind">&nbsp;<p class = "search" id="dialog-link">
		<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-11" style="position: absolute; height: auto; width: 400px; top: 587px; left: 429px; display: none;">
		<button type="button" role="button" title="Close">
		<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
		<div id="dialog" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 59px; max-height: none; height: auto;">
		<p>
		<select onchange = 'dropdownkind(this)'>
		<?php
			require 'kindconstring.php';
			$query = mysql_query("SELECT Kind FROM $tbl_name");
			while($row = mysql_fetch_array($query))
			{
					echo "<option value='" . $row['Kind'] ."'>" . $row['Kind']."</option>";
			}
		?>
		</select>
		</p>
		</div>
		<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
		<div class="ui-dialog-buttonset">
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
		<span class="ui-button-text">OK</span></button>
		</div>
		</p>
		</input>
		</div>
		</br>
		<label for="metric">Metric Size:</label>
		<input type="text" name="ametric" id="ametric">&nbsp;<p class = "search" id="dialog-link1">
		<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-11" style="position: absolute; height: auto; width: 400px; top: 587px; left: 429px; display: none;">
		<button type="button" role="button" title="Close">
		<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
		<div id="dialog1" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 59px; max-height: none; height: auto;">
		<p>
		<select onchange = 'dropdownmet(this)'>
		<?php
			require 'metricconstring.php';
			$query = mysql_query("SELECT MetricSize FROM $tbl_name");
			while($row = mysql_fetch_array($query))
			{
					echo "<option value='" . $row['MetricSize'] ."'>" . $row['MetricSize']."</option>";
			}
		?>
		</select>
		</p>
		</div>
		<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
		<div class="ui-dialog-buttonset">
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
		<span class="ui-button-text">OK</span></button>
		</div>
		</p>
		</input>
		</br>
		<label for="inches">Inches Size:</label>
		<input type="text" name="ainch" id="ainch">&nbsp;<p class = "search" id="dialog-link2">
		<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-11" style="position: absolute; height: auto; width: 400px; top: 587px; left: 429px; display: none;">
		<button type="button" role="button" title="Close">
		<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
		<div id="dialog2" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 59px; max-height: none; height: auto;">
		<p>
		<select onchange = 'dropdowninches(this)'>
		<?php
			require 'inchesconstring.php';
			$query = mysql_query("SELECT inchsize FROM $tbl_name");
			while($row = mysql_fetch_array($query))
			{
					echo "<option value='" . $row['inchsize'] ."'>" . $row['inchsize']."</option>";
			}
		?>
		</select>
		</p>
		</div>
		<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
		<div class="ui-dialog-buttonset">
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
		<span class="ui-button-text">OK</span></button>
		</div>
		</p>
		</input>
		</br>
		<label for="part">Part No:</label>
		<input type="text" name="apart" id="apart" style = "text-transform: uppercase;">
		</br>
		</br>
		<label for="customer">Customer:</label>
		<input type="text" name="acustomerid" id="acustomerid">&nbsp;<p class = "search" id="dialog-link3">
		<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-11" style="position: absolute; height: auto; width: 400px; top: 587px; left: 429px; display: none;">
		</div>
		</p>
		</input>
		</br>
		<label for="brand">Brand:</label>
		<input type="text" name="abrand" id="abrand">&nbsp;<p class = "search" id="dialog-link4">
		<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-11" style="position: absolute; height: auto; width: 400px; top: 587px; left: 429px; display: none;">
		<button type="button" role="button" title="Close">
		<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
		<div id="dialog4" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 59px; max-height: none; height: auto;">
		<p>
		<select onchange = 'dropdownbrand(this)'>
		<?php
			require 'brandconstring.php';
			$query = mysql_query("SELECT brandname FROM $tbl_name");
			while($row = mysql_fetch_array($query))
			{
					echo "<option value='" . $row['brandname'] ."'>" . $row['brandname']."</option>";
			}
		?>
		</select>
		</p>
		</div>
		<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
		<div class="ui-dialog-buttonset">
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
		<span class="ui-button-text">OK</span></button>
		</div>
		</p>
		</input>
		</br>
		<label for="type">Type:</label>
		<input type="text" name="atype" id="atype">&nbsp;<p class = "search" id="dialog-link5">
		<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-11" style="position: absolute; height: auto; width: 400px; top: 587px; left: 429px; display: none;">
		<button type="button" role="button" title="Close">
		<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
		<div id="dialog5" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 59px; max-height: none; height: auto;">
		<p>
		<select onchange = 'dropdowntype(this)'>
		<?php
			require 'typeconstring.php';
			$query = mysql_query("SELECT type FROM $tbl_name");
			while($row = mysql_fetch_array($query))
			{
					echo "<option value='" . $row['type'] ."'>" . $row['type']."</option>";
			}
		?>
		</select>
		</p>
		</div>
		<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
		<div class="ui-dialog-buttonset">
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
		<span class="ui-button-text">OK</span></button>
		</div>
		</p>
		</input>
		</br>
		<label for="material">Material:</label>
		<input type="text" name="amaterial" id="amaterial">&nbsp;<p class = "search" id="dialog-link6">
		<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-11" style="position: absolute; height: auto; width: 400px; top: 587px; left: 429px; display: none;">
		<button type="button" role="button" title="Close">
		<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
		<div id="dialog6" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 59px; max-height: none; height: auto;">
		<p>
		<select onchange = 'dropdownmaterial(this)'>
		<?php
			require 'materialconstring.php';
			$query = mysql_query("SELECT material FROM $tbl_name");
			while($row = mysql_fetch_array($query))
			{
					echo "<option value='" . $row['material'] ."'>" . $row['material']."</option>";
			}
		?>
		</select>
		</p>
		</div>
		<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
		<div class="ui-dialog-buttonset">
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
		<span class="ui-button-text">OK</span></button>
		</div>
		</p>
		</input>
		</div>
		
		<div class = "righttextbox">
		<label for="cavity">No. of Cavity:</label>
		<input type="text" name="acavity" id="acavity" value = "0"></br></br>
		<label for="diecutter">Die Cutter:</label>
		<input type="text" name="adiecutter" id="adiecutter" value = "0"></br></br>
		<label for="metalg">Metal Gauge:</label>
		<input type="text" name="ametalg" id="ametalg" value = "0"></br></br>
		<label for="rhard">Rubber Hard:</label>
		<input type="text" name="arhard" id="arhard" value = "0"></br></br>
		<label for="rweight">Rubber Weight:</label>
		<input type="text" name="arweight" id="arweight" value = "0"></br></br>
		<label for="ctime">Curring Time:</label>
		<input type="text" name="actime" id="actime" value = "0"></br></br>
		<label for="stickynote">Note:</label>
		<input type="text" name="astickynote" id="astickynote"></br>
		</br></br>
		<form = "submitbtns">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type = "submit" class="button"  name = "submit" value = "ADD PRODUCT" style="left: 500px;" onClick="window.location.reload()"/>ADD PRODUCT</button>
		</br></br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type = "reset" class="button"  name = "clear" value = "CLEAR" onClick="window.location.reload()" />CLEAR</button>
		</form>
		</div>
		</form>
		
		<form class = "seperator">
		<div id="dialog3" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 59px; max-height: none; height: auto; display: none;">
		<p>
		<?php
			include 'customerdb.php';
		?>
		</p>
		</div>
		</form>
<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.js"></script>
<script type = "text/javascript">
	var opt = {
		autoOpen: false,
		width: 200,
		modal: true,
		show: {
				effect: "blind",
				duration: 1000
		},
		hide: {
			effect: "fade",
			duration: 1000
		},
		buttons: [
			{
			text: "OK",
			click: function() {
				$( this ).dialog( "close" );
				}
			}
		],
		open: function(event,ui) {
            $('.ui-widget-overlay').bind('click', function(event,ui) {         
                $('#dialog').dialog('close');
				$('#dialog1').dialog('close');
				$('#dialog2').dialog('close');
				$('#dialog4').dialog('close');
				$('#dialog5').dialog('close');
				$('#dialog6').dialog('close');
            });
        }
	};
	var theDialog = $("#dialog").dialog(opt);
	var theDialog2 = $("#dialog1").dialog(opt);
	var theDialog3 = $("#dialog2").dialog(opt);
	var theDialog4 = $("#dialog4").dialog(opt);
	var theDialog5 = $("#dialog5").dialog(opt);
	var theDialog6 = $("#dialog6").dialog(opt);
	$("#dialog3").dialog({
		autoOpen: false,
		width: 'auto',
		height: 'auto',
		modal: true,
		show: {
				effect: "blind",
				duration: 1000
		},
		hide: {
			effect: "fade",
			duration: 1000
		},
		open: function(event,ui) {
            $('.ui-widget-overlay').bind('click', function(event,ui) {         
                $('#dialog3').dialog('close');
            });
        },
		open: function(event,ui) {
            $('.declickcustom').bind('click', function(event,ui) {         
                $('#dialog3').dialog('close');
            });
        }
	});
	$( "#dialog-link" ).click(function( event ) {
		theDialog.dialog("open");
		event.preventDefault();
	});
	$( "#dialog-link1" ).click(function( event ) {
		theDialog2.dialog("open");
		event.preventDefault();
	});
	$( "#dialog-link2" ).click(function( event ) {
		theDialog3.dialog("open");
		event.preventDefault();
	});
	$( "#dialog-link3" ).click(function( event ) {
		$("#dialog3").dialog("open");
		event.preventDefault();
		return false;
	});
	$( "#dialog-link4" ).click(function( event ) {
		theDialog4.dialog("open");
		event.preventDefault();
	});
	$( "#dialog-link5" ).click(function( event ) {
		theDialog5.dialog("open");
		event.preventDefault();
	});
	$( "#dialog-link6" ).click(function( event ) {
		theDialog6.dialog("open");
		event.preventDefault();
	});
	$( "#dialog-link, #icons li" ).hover, $( "#dialog-link1, #icons li" ).hover, $( "#dialog-link2, #icons li" ).hover, $( "#dialog-link3, #icons li" ).hover, $( "#dialog-link5, #icons li" ).hover , $( "#dialog-link6, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
	);
</script>
</body>
</html>