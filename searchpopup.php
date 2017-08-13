<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js"></script>
<link rel="stylesheet" href="css/search.css">
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
    $("td:hidden,th:hidden","#productdb").show();
    var pdf = new jsPDF('landscape', 'pt', 'a4');
    pdf.cellInitialize();
    pdf.setFontSize(8);
    $.each( $('#productdb tr'), function (i, row){
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
<h1 class = "no-print">PRODUCT LISTVIEW</h1>


<div class = "searchform" id = "searchform" class = "no-print">
<form name = "searchinfo" method = "POST" action = "productdb.php" onSubmit = "return tableThings();">
<input type = "search" placeholder = "SEARCH" size = "25" id = "searchtext" class = "no-print"/>
</br>
</br>
<input type = "submit" id="SEARCH" value="SEARCH" class = "no-print"/>
<input type = "submit" id="CLEAR" value="CLEAR" class = "no-print"/>
</form>
</div>
</br>
</br>

<form name = "exportprevprint" method = "POST">
<p class = "no-print">
<input type = "submit" value = "Export To" class = "exportto" id = "dialog-link2" >
		<p>
		<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-11" style="position: absolute; height: auto; width: 400px; top: 587px; left: 429px; display: none;">
		<button type="button" role="button" title="Close">
		<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
		<div id="dialog2" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 59px; max-height: none; height: auto;">
		<form name = "exportButtons" method = "POST" action = "productdb.php">
		<p>
		<label><img src = "img/pdf.png"/></label>
		<input type = "submit" id = "pdf" name = "pdf" class = "pdf" value = "PDF" onClick = "javascript:pdfexport();"/></br></br>
		<label><img src = "img/excel.png"/></label>
		<input type = "submit" id = "excel" name = "excel" class = "excel" value = "Excel" onClick = "$('#linktable').tableExport({type: 'excel', escape: 'false'});"/></br></br>
		<label><img src = "img/text.png"/></label>
		<input type = "submit" id = "text" name = "text" class = "text" value = "Notepad" onClick= "textClick()"/></br></br>
 		</p>
		</form>
		</div>
		<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
		<div class="ui-dialog-buttonset">
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
		<span class="ui-button-text">OK</span></button>
		</div>
		</p>
</input> 
</p>
<p class = "no-print">
<button type = "submit" class = "printto" id = "printto"><a href = "javascript:window.print()" class="no-print"><img src = "img/tblprinter.png" class = "no-print"/></a></button>
</p>
</form>

<p>
<?php
require 'productdb.php';
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