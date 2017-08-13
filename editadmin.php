<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js"></script>
<link rel="stylesheet" href="css/edituser.css">
<link rel="stylesheet" href="jquery-ui-1.11.2/jquery-ui.css">
<script>
$(function() {
    $( "#bday" ).datepicker({changeMonth: true, changeYear: true, yearRange:'1900:2013'});
  });
</script>

</head>
<body>
<h1>EDIT USER ADMIN</h1>
	
		<form method = 'POST' action = "processeditadmin.php"> 
		<div class = "othertextbox">
		<label for="userid">User ID:</label>
		<input type="text" name="userid" id="userid" readonly="readonly">&nbsp;<p class = "search" id="dialog-link3">
		<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-11" style="position: absolute; height: auto; width: 400px; top: 587px; left: 429px; display: none;">
		<button type="button" role="button" title="Close">
		<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
		<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
		<div class="ui-dialog-buttonset">
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
		<span class="ui-button-text">OK</span></button>
		</div>
		</p>
		</input>
		</br>
		<div>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" readonly="readonly">&nbsp;
		</input>
		</div>
		</br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">&nbsp;
		</input>
		</br>
		</br>
		<label for="first">First Name:</label>
		<input type="text" name="first" id="first">&nbsp;
		</input>
		</br>
		</br>
		<label for="maiden">Maiden Name:</label>
		<input type="text" name="maiden" id="maiden">
		</br>
		</br>
		<label for="last">Surname:</label>
		<input type="text" name="last" id="last">&nbsp;</input>
		</br>
		</br>
		<label for="bday">Birthday:</label>
		<input type="text" name="bday" id="bday" placeholder="MM/DD/YYYY" maxlength="10" readonly="readonly">&nbsp;</input>
		</br>
		</br>
		<label for="position">Reason:</label>
		<input type="text" name="reason" id="reason">&nbsp;</input>
		</input>
		</div>
		<div class = "submitbtns">
		<form id = "submitbtns">
		<button type = "submit" class="button"  name = "submit" value = "EDIT USER" style="left: 500px; font-size: 20px;" onClick="window.location.reload()"/>EDIT</button>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type = "reset" class="button"  name = "clear" value = "CLEAR" style="left: 500px; font-size: 20px;" onClick="window.location.reload()" />CLEAR</button>
		</form>
		</div>
		</div>
		</div>
		</form>
		
		
		<form class = "seperator">
		<div id="dialog3">
		<?php
			include 'admintbl.php';
		?>
		</div>
		</form>
<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.js"></script>
<script type = "text/javascript">
	$("#dialog3").dialog({
		autoOpen: false,
		width: '890',
		height: '450',
		autoresize: false,
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
            $('.declick').bind('click', function(event,ui) {         
                $('#dialog3').dialog('close');
            });
        }
	});
	$( "#dialog-link3" ).click(function( event ) {
		$("#dialog3").dialog("open");
		event.preventDefault();
		return false;
	});
	$( "#dialog-link3, #icons li" ).hover(
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