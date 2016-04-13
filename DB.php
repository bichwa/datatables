<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">



<script>


$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "process.php"
    } );
} );
</script>


    
</head>
<body>

<?php
$conn = new mysqli("localhost", "root", "", "test2");
if ($conn -> connect_error) {
	die("connection failed". $conn-> connect_error);
}

$results = $conn -> query("SELECT * from users");
if ($results-> num_rows > 0) {

	//display data in a table
	echo "<table>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Town</th>";
	//output data of each row
	while ($row = $results->fetch_assoc()) {
		echo "<tr> 
		<td>". $row["id"]."</td>
		<td>".$row["name"]."</td>
		<td> ".$row["email"]."</td>
		<td>".$row["town"]."</td>
		</tr>";
		
	}
	echo "</table>";
}
?>

<table id="example" class="display " cellspacing="0" width="100%">
<thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Town.</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Town.</th>
            </tr>
        </tfoot>


</table>
</body>
<script type="text/javascript" src = "js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src = "js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src = "js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src = "js/buttons.flash.min.js"></script> 
<script type="text/javascript" src = "js/jszip.min.js"></script>
<script type="text/javascript" src = "js/pdfmake.min.js"></script>
<script type="text/javascript" src = "js/vfs_fonts.js"></script>
<script type="text/javascript" src = "js/buttons.html5.min.js"></script>



</html>






