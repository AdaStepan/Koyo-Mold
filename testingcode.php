<html>
<head>
<script src="../KoyoMold/jquery-1.11.2.js"></script>
<link rel="stylesheet" href="css/testingcss.css">
<script type = "javascript" src = "text/javascript">
$('th').click(function(){
    var table = $(this).parents('table').eq(0)
    var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
    this.asc = !this.asc
    if (!this.asc){rows = rows.reverse()}
    for (var i = 0; i < rows.length; i++){table.append(rows[i])}
})
function comparer(index) {
    return function(a, b) {
        var valA = getCellValue(a, index), valB = getCellValue(b, index)
        return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
    }
}
function getCellValue(row, index){ return $(row).children('td').eq(index).html() }
</script>
</head>
<table>
<thead>
<tr><th>string</th><th>number</th><th>boolean</th></tr>
</thead>
<tbody>
<tr><td>111</td><td>1.1</td><td>false</td></tr>
<tr><td>test4</td><td>1.2</td><td>true</td></tr>
<tr><td>333</td><td>500</td><td>false</td></tr>
<tr><td>test3</td><td>-500</td><td>true</td></tr>
</tbody>
</table>
<br/>

<table>
    <tr>
        <th id="facility_header">Facility name</th>
        <th>Phone #</th>
        <th id="city_header">City</th>
        <th>Speciality</th>
    </tr>
    <tr>
        <td>CCC</td>
        <td>00001111</td>
        <td>Amsterdam</td>
        <td>GGG</td>
    </tr>
    <tr>
        <td>JJJ</td>
        <td>55544444</td>
        <td>London</td>
        <td>MMM</td>
    </tr>
    <tr>
        <td>AAA</td>
        <td>33332222</td>
        <td>Paris</td>
        <td>RRR</td>
    </tr>
</table>
</html>