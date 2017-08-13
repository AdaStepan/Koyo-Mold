<?php
include('sessionadmin.php');
?>
<html>
<head>
<link rel="stylesheet" href="css/indiestyle.css">
<link rel="stylesheet" href="css/jquery.jui_dropdown.css">
<link rel="stylesheet" href="../KoyoMold/jquery-ui-1.11.2/jquery-ui.min.css">
<script src="../KoyoMold/jquery-1.11.2.js"></script>   
<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/printadmin.css" media="print"/>
<script src="../KoyoMold/jquery.jui_dropdown.js"></script>
<script type="text/javascript">
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
</script>
</head>
<body>

<div class = "no-print">
<ul class="menuTemplate1 decor1_1" style="left: 60px;">
    <li><a href="indexadmin.php">Home</a></li>
    <li class="separator"></li>
    <li><a href = "#" class="arrow">Admin Privileges</a>
        <div class="drop decor1_2" style="width: 150px;">
            <div class='left'>
                <b>Admin Privileges</b>
                <div>
                     <a href = "registerpage.php" class = "no-print" onClick="return popup(this)">Register User</a></br>
					 <a href = "registeradmin.php" class = "no-print" onClick="return popup(this)">Register Admin</a></br>
					 <a href = "editadmin.php" class = "no-print" onClick="return popup(this)">Edit Admin</a></br>
					 <a href = "edituser.php" class = "no-print" onClick="return popup(this)">Edit User</a></br>
					 <a href = "admindelete.php" class = "no-print" onClick="return popup(this)">Delete Admin</a></br>
					 <a href = "userdelete.php" class = "no-print" onClick="return popup(this)">Delete User</a></br>
					 <hr>
					 <a href = "searchuser.php" class = "no-print" onClick="return popup(this)">User Monitor</a>
                </div>
            </div>
            <div style='clear: both;'></div>
        </div>
    </li>
	<li class="separator"></li>
    <li><a href = "#" class="arrow">Data Encoding</a>
        <div class="drop decor1_2" style="width: 150px;">
            <div class='left'>
                <b>Data Encoding</b>
                <div>
                     <a href = "add.php" class = "no-print" onClick="return popup(this)">Add Product</a></br>
					 <a href = "edit.php" class = "no-print" onClick="return popup(this)">Edit Product</a></br>
					 <a href = "searchdelete.php" class = "no-print" onClick="return popup(this)">Delete Product</a></br>
					 <a href = "javascript:window.print()" class = "no-print" onClick="return popup(this)">Print Hardcopy</a></br>
                </div>
            </div>
            <div style='clear: both;'></div>
        </div>
    </li>
    <li class="separator"></li>
    <li><a href = "http://localhost:3310/phpmyadmin" onClick="return popup(this)">phpMyAdmin</a></li>
    <li class="separator"></li>
    <li class="separator"></li>
    <li><a href = "logoutredirect.php" onclick="return confirm('Do you really want to Log Off before being redirected?');" class = "no-print">Public Login</a>
    </li>
	<li class="separator"></li>
    <li><a href = "logoutadmin.php" onclick="return confirm('Do you really want to Log Off?');" class = "no-print">Logout, Sir <i style = "color:green;"><?php echo $login_session; ?></i></a>
    </li>
</ul>
<div class = "whitebox">
<p style = "color:black; text-align: center; position: relative; bottom: 30px; font-size: 12px;">Date/Time for today is:</p> <div id = "dnt" style = "color:#3B3B3B; text-align: center; position: relative; bottom: 25px; font-size: 12px;">
</div>
</div>
</div>
</br></br></br>
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
<div class = "selection2">	
		<div class = "othertextbox2">
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
		
		<div class = "righttextbox2">
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
		<label for="stickynote" class = "no-print">Note:</label>
		<input type="text" name="stickynote" id="stickynote" value = "<?php echo $note; ?>" style= "height: 100px; font-size: 12px;" class = "no-print"disabled>
		</div>

		</br>
		</br>
		</br>
		</br>
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
</body>		
</html>