<?php 
	//Includes
	include 'conexion.php';
	//Query
	$sql = mysqli_query($dbconnect,"SELECT * FROM ltqpresults ORDER BY id DESC LIMIT 1");
	//Loop Control
	while ($row = mysqli_fetch_array($sql)) {
		$qpprimero = $row['primerpremio'];
		$qpsegundo = $row['segundopremio'];
		$qptercero = $row['tercerpremio'];
		$qpfdate = $row['fecha'];
		$qpstatus = $row['estado'];

	}

 ?>