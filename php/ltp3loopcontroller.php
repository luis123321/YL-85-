<?php 
	//Includes
	include 'conexion.php';
	//Query
	$sql = mysqli_query($dbconnect,"SELECT * FROM ltp3results ORDER BY id DESC LIMIT 1");
	//Loop Control
	while ($row = mysqli_fetch_array($sql)) {
		$p3primero = $row['primerpremio'];
		$p3segundo = $row['segundopremio'];
		$p3tercero = $row['tercerpremio'];
		$p3fdate = $row['fecha'];
		$p3status = $row['estado'];

	}

 ?>