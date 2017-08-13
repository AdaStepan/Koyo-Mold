<?php
include('session.php');
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../KoyoMold/jquery-ui-1.11.2/jquery-ui.min.css">
<script src="../KoyoMold/jquery-1.11.2.js"></script>   
<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>
<script type="text/javascript">
<!--
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=100,scrollbars=yes');
return false;
}
//-->
</script>
</head>
<body>

<div class = "no-print">
<div class = "whitebox2">
<div class = "boxinside">
<p style = "color:white; text-align: center; position: relative; top: 10px; font-size: 12px;">Date/Time for today is:</p> <div id = "dnt" style = "color:white; text-align: center; position: relative; top: 10px; font-size: 12px;"></div>
</div>
<p class = "no-print" style = "color:black; text-align: center; position: relative; bottom: 90px; left: 100px; font-size: 20px;">
<b id="welcome">Logged in: <i style = "color:green;"><?php echo $login_session; ?></i></b>
<p class = "help-support" id = "help-support">

		<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-11" style="position: absolute; height: auto; width: 400px; top: 587px; left: 429px; display: none;">
		<button type="button" role="button" title="Close">
		<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
		<div id="dialog" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 59px; max-height: none; height: auto;">
		<form name = "exportButtons" method = "POST" action = "">
		<p style="position: relative; right: 60px; top: 30px;">
		<label><img src = "img/skype.png" style = "position: relative; bottom: 15px; left: 1px;"/></label>
		<input type = "submit" id = "skype" name = "skype" class = "skype" value = "Skype" style = "position: relative; bottom: 15px; left: 1px;"/></br></br>
		<label><img src = "img/email.png" style = "position: relative; bottom: 15px; left: 1px;"/></label>
		<input type = "submit" id = "email" name = "email" class = "email" value = "Email"/></br></br>
		<label><img src = "img/chat.png" style = "position: relative; bottom: 15px; left: 1px;"/></label>
		<input type = "submit" id = "chat" name = "chat" class = "chat" value = "Chat for Help"/></br></br>
 		</p>
		</form>
		</div>
		<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
		<div class="ui-dialog-buttonset">
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
		<span class="ui-button-text">OK</span></button>
		</div>
		</div>
		</div>
</p>
</br>
</p>
<a href = "logout.php" onclick="return confirm('Do you really want to Log Off?');" class = "no-print"><input type = "button" class="logoutbutton" name="logout"/></a>
</div>
</div>

<?php
require 'mainconnectionstring.php';
$query = mysql_query("SELECT * FROM {$tbl_name}");
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
}
?>
</br>
</br>
<div class = "selection">	
		<div class = "othertextbox">
		<label for="mold">Mold No:</label>
		<input type="text" name="mold" id="mold" value = "<?php echo $moldno; ?>" style = "text-transform: uppercase;" disabled >
		<a href="searchpopup.php" onClick="return popup(this, 'Product Search')">
		<p class = "search">
		</p>
		</a>
		</input>
		</br>
		</br>
		<label for="kind">Kind:</label>
		<input type="text" name="kind" id="kind" value = "<?php echo $kind; ?>" disabled>
		</br>
		</br>
		<label for="metric">Metric Size:</label>
		<input type="text" name="metric" id="metric" value = "<?php echo $metricsize; ?>" disabled>
		</br>
		</br>
		<label for="inches">Inches Size:</label>
		<input type="text" name="inches" id="inches" value = "<?php echo $inchesize; ?>" disabled>
		</br>
		</br>
		<label for="part">Part No:</label>
		<input type="text" name="part" id="part" value = "<?php echo $partno; ?>" style = "text-transform: uppercase;" disabled>
		</br>
		</br>
		<label for="customer">Customer:</label>
		<input type="text" name="customer" id="customer" value = "<?php echo $customer; ?>" disabled>
		</br>
		</br>
		<label for="brand">Brand:</label>
		<input type="text" name="brand" id="brand" value = "<?php echo $brand; ?>"disabled>
		</br>
		</br>
		<label for="type">Type:</label>
		<input type="text" name="type" id="type" value = "<?php echo $type; ?>"disabled>
		</div>
		
		<div class = "righttextbox">
		<label for="material">Material:</label>
		<input type="text" name="material" id="material" value = "<?php echo $material; ?>" disabled>
		</br>
		</br>
		<label for="cavity">No. of Cavity:</label>
		<input type="text" name="cavity" id="cavity" value = "<?php echo $noofcavity; ?>" disabled>
		</br>
		</br>
		<label for="diecutter">Die Cutter:</label>
		<input type="text" name="diecutter" id="diecutter" value = "<?php echo $diecutter; ?>" disabled>
		</br>
		</br>
		<label for="metalg">Metal Gauge:</label>
		<input type="text" name="metalg" id="metalg" value = "<?php echo $metalgauge; ?>" disabled>
		</br>
		</br>
		<label for="rhard">Rubber Hard:</label>
		<input type="text" name="rhard" id="rhard" value = "<?php echo $rubberhard; ?>" disabled>
		</br>
		</br>
		<label for="rweight">Rubber Weight:</label>
		<input type="text" name="rweight" id="rweight" value = "<?php echo $rubberweight; ?>" disabled>
		</br>
		</br>
		<label for="ctime">Curring Time:</label>
		<input type="text" name="ctime" id="ctime" value = "<?php echo $curringtime; ?>" disabled>
		</br>
		</br>
		<p class = "no-print">
		<label for="stickynote">Note:</label>
		<input type="text" name="stickynote" id="stickynote" value = "<?php echo $note; ?>" style= "height: 100px; font-size: 12px;" disabled>
		</p>
		</div>

		</br>
		</br>
		</br>
		</br>
		<div class = "buttones" class = "no-print">
		<p class = "alignment" class = "no-print">
		<button type = "submit" id="add" class = "no-print">
		<a href = "add.php" onClick="return popup(this, 'Product Search')" class = "no-print">
		<p class = "addbtn"></p></a></button>
		
		<button type = "submit" id="edit" class = "no-print">
		<a href = "edit.php" onClick="return popup(this, 'Product Search')" class = "no-print">
		<p class = "editbtn"></p></a></button>
		
		<button type = "submit" id="print" class = "no-print"><a href = "javascript:window.print()" class="no-print"><p class = "printbtn">
		</p></a></button>
		</p>
		</div>
		</br>
</div>
<script>
document.getElementById("dnt").innerHTML = formatAMPM();

function formatAMPM() {
var refresh=1000;
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date();
x.toLocaleString();
document.getElementById('dnt').innerHTML = x;
tt=formatAMPM();
}
</script>
<script type = "text/javascript">
	$("#dialog").dialog({
		autoOpen: false,
		width: '305',
		height: '260',
		modal: true,
		title: 'User Help Support',
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
                $('#dialog').dialog('close');
            });
        }
	});
	$( "#help-support" ).click(function( event ) {
		$("#dialog").dialog("open");
		event.preventDefault();
	});
</script>
</body>		
</html>