<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Koyo Mold</title>
  <link rel="stylesheet" href="css/logins.css">
</head>
<body class = "publiclogin">
	</br>
	</br>
	</br>
	</br>
	</br>
	<h1 align = center><font size = "8"> <font color = "#FF0000">KOYO MOLD</h1> 
	</br>
	<h1 align = center><font size = "6"> <font color = "black">(KOYO OILSEAL & RUBBER PRODUCTS)</h1>
	<div>
	<form name = "myformuser" action = "" method = "POST" class="login" align= "center">
	<fieldset>
    <p>
      <label for="username">USERNAME:</label>
      <input type="text" name="username" id="username">
    </p>

    <p>
      <label for="password">PASSWORD:</label>
      <input type="password" name="password" id="password" maxlength="45">
    </p>


    <button type="submit" name = "submit" class="login-button">Login</button>
	</form>
	<div class = "repositioning">
	<input type = "reset" class="extra" value = "CLEAR FIELDS" style="position: relative; left: 85px;"/>
	<input type="button" class="extra" a href = "sysadmin.php" value = "NEED ASSISTANCE?" style="position: relative; left: 85px; bottom: 30px;"/>
	</div>
	<section class="about">
	</br>
	</br>
	</br>
	</br>
	</br>
    <p class="about"><font size = "3" font-style = "transparent"> Copyright © 2015 KOYO Oil Seal & Rubber Products</p>
	</fieldset>

	</div>
	</section>
  </body>
</html>
