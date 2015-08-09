<?php 
	//Includes
	include 'conexion.php';
	//Query
	$sql = mysqli_query($dbconnect,"SELECT * FROM ltqrresults ORDER BY id DESC LIMIT 1");
	//Loop Control
	while ($row = mysqli_fetch_array($sql)) {
		$qrfirts = $row['primerpremio'];
		$qrsecond = $row['segundopremio'];
		$qrthird = $row['tercerpremio'];
		$qrfdate = $row['fecha'];
		$qrstatus = $row['estado'];

	}

 ?>