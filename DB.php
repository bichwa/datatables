<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
	
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

<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
	    <th>Email</th>
	    <th>Town</th>
	</tr>
	</thead>

	<tfoot>
		<tr>
		<th>ID</th>
		<th>Name</th>
	    <th>Email</th>
	    <th>Town</th>
	</tr>
	</tfoot>

	<tbody>
	<tr>
		<td>1</td>
		<td>Eric</td>
		<td>rickarani@gmail.com</td>
		<td>Nyeri</td>


	</tr>

	<tr>
		<td>2</td>
		<td>Mike</td>
		<td>mike@gmail.com</td>
		<td>Nairobi</td>


	</tr>

	<tr>
		<td>4</td>
		<td>Agness</td>
		<td>aggie@gmail.com</td>
		<td>Kisumu</td>


	</tr>

	<tr>
		<td>67</td>
		<td>Benson</td>
		<td>ben@gmail.com</td>
		<td>Karatina</td>


	</tr>
</tbody>


</table>
</body>
<script type="text/javascript" src = "jquery-1.12.0.min.js"></script>
<script type="text/javascript" src = "jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
</html>






