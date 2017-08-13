<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js"></script>
<link rel="stylesheet" href="css/reg.css">
<link rel="stylesheet" href="jquery-ui-1.11.2/jquery-ui.css">
<script type = "text/javascript">
function generateId() {
	var rnd = Math.floor(Math.random()*(100000));
	document.registration.user_id.value = rnd;
}
</script>
<script>
$(function() {
    $( "#birthday" ).datepicker({changeMonth: true, changeYear: true, yearRange:'1900:2013'});
  });
</script>
</head>
<body onLoad="generateId()">
<h1>Registration of users</h1>
		<form method = 'POST' action = "processreg.php" name = "registration"> 
		<div class = "regtextboxes">
		<label for="user_id">User Id:</label>
		<input type="text" name="user_id" id="user_id" readonly="readonly"></br></br>
		<label for="username">*Username:</label>
		<input type="text" name="username" id="username"></br></br>
		<label for="password">*Password:</label>
		<input type="password" name="password" id="password"></br></br>
		<label for="retype">*Re-type Password:</label>
		<input type="password" name="retype" id="retype"></br></br>
		<label for="firstn">*First Name:</label>
		<input type="text" name="firstn" id="firstn"></br></br>
		<label for="middlei">Maiden Name:</label>
		<input type="text" name="middlei" id="middlei"></br></br>
		<label for="lastn">*Last Name:</label>
		<input type="text" name="lastn" id="lastn"></br></br>
		<label for="birthday">*Birthday:</label>
		<input type="text" name="birthday" id="birthday" value = "MM/DD/YYYY" maxlength="10" readonly="readonly"></br></br>
		<label for="position">*Employee's Position:</label>
		<input type="text" name="position" id="position"></br></br></br></br>
		</div>
		<div class = "submitbtns">
		<form id = "submitbtns">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type = "submit" class="button"  name = "submit" value = "Register User" style="left: 500px;" onClick="window.location.reload()"/>Register User</button>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type = "reset" class="button"  name = "clear" value = "Clear Fields" onClick="window.location.reload()" />Clear Fields</button>
		</form>
		</div>
		</form>
		</div>
		</form>
<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.js"></script>
<script type = "text/javascript">
	$("#dialog").dialog({
		autoOpen: false,
		width: 'auto',
		height: 'auto',
		modal: true,
		show: {
				effect: "highlight",
				duration: 1000
		},
		hide: {
			effect: "explode",
			duration: 1000
		},
		open: function(event,ui) {
            $('.ui-widget-overlay').bind('click', function(event,ui) {         
                $('#dialog').dialog('close');
            });
        }
	});
	$( "#dialog-link" ).click(function( event ) {
		$("#dialog7").dialog("open");
		event.preventDefault();
	});
	$( "#dialog-link, #icons li" ).hover(
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