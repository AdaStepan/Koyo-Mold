<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js"></script>
<link rel="stylesheet" href="css/usersadmin.css">
<link rel="stylesheet" href="jquery-ui-1.11.2/jquery-ui.css">
<script type="text/javascript" src="tableExport/tableExport.js"></script>
<script type="text/javascript" src="tableExport/jquery.base64.js"></script>
<script type="text/javascript" src="jsPDF/jspdf.js"></script>
<script type="text/javascript" src="jsPDF/jspdf.plugin.from_html.js"></script>
<script type="text/javascript" src="jsPDF/jspdf.plugin.split_text_to_size.js"></script>
<script type="text/javascript" src="jsPDF/jspdf.plugin.standard_fonts_metrics.js"></script>
<script type="text/javascript" src="jsPDF/jspdf.plugin.cell.js"></script>
<script src="//mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
<link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>
<script type="text/javascript">
function textClick(){
		var file_text;
		file_text = $("#linktable").text();
		
		$.post("save.php", {file_data: file_text}, function(data){
			alert("Data has been written!");
			location.reload();
		});
	}
</script>
<script type="text/javascript">
function pdfexport(){
    $("td:hidden,th:hidden","#userdb").show();
    var pdf = new jsPDF('landscape', 'pt', 'a4');
    pdf.cellInitialize();
    pdf.setFontSize(8);
    $.each( $('##userdb tr'), function (i, row){
        $.each( $(row).find("td, th"), function(j, cell){
        	 var txt = $(cell).text().trim().split(" ").join("\n") || " ";
             var width = (j==0) ? 60 : 45; 
             pdf.cell(45, 60, width, 60, txt, i);
        });
    });
                    pdf.output("dataurlnewwindow");
					window.close();
}
</script>
<script type = "text/javascript">
</script>
</head>
<body>
<h1 class = "no-print">List of registered users</h1>

<form name = "exportprevprint" method = "POST">
<p class = "no-print">
<a href = "javascript:window.print()" class="no-print"><img src = "img/tblprinter.png" class = "no-print"/></a>
</p>
</form>

<div class = "searchform" id = "searchq" class = "no-print">
<label style="color:black;" class = "no-print"><h1>Primary Users</h1></label>
<form name = "searchque" method = "POST" action = "searchuser.php" onSubmit = "return tableThings();">
<input type = "search" placeholder = "SEARCH" size = "25" id = "searchtextu" class = "no-print"/>
</br>
</br>
<input type = "submit" id="SEARCHu" value="SEARCH" class = "no-print"/>
<input type = "submit" id="CLEAR" value="CLEAR" class = "no-print"/>
</form>
</div>
</br>
</br>

<p>
<?php
require 'usermonitoring.php';
?>
</p>
</br></br>
<div class = "searchform" id = "searcha" class = "no-print">
<label style="color:black;" class = "no-print"><h1>Administrator</h1></label>
<form name = "searcha" method = "POST" action = "searchuser.php" onSubmit = "return tableThings();">
<input type = "search" placeholder = "SEARCH" size = "25" id = "searchtexta" class = "no-print"/>
</br>
</br>
<input type = "submit" id="SEARCHa" value="SEARCH" class = "no-print"/>
<input type = "submit" id="CLEARa" value="CLEAR" class = "no-print"/>
</form>
</div>
</br>
</br>

<p>
<?php
require 'adminmonitoring.php';
?>
</p>

<script src="../KoyoMold/jquery-ui-1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script type = "text/javascript">
	$("#dialog2").dialog({
		autoOpen: false,
		width: 'auto',
		height: 'auto',
		modal: true,
		title: 'Export To',
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
                $('#dialog2').dialog('close');
            });
        }
	});
	$( "#dialog-link2" ).click(function( event ) {
		$("#dialog2").dialog("open");
		event.preventDefault();
	});
</script>
</body>
</html>