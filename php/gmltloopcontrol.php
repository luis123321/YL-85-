<?php 
	//Includes
	include 'conexion.php';
	//Query
	$sql = mysqli_query($dbconnect,"SELECT * FROM ltgmresults ORDER BY id DESC LIMIT 1");
	//Loop Control
	while ($row = mysqli_fetch_array($sql)) {
		$gmfirts = $row['primerpremio'];
		$gmsecond = $row['segundopremio'];
		$gmthird = $row['tercerpremio'];
		$gmfdate = $row['fecha'];
		$gmstatus = $row['estado'];

	}

 ?>