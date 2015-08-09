<?php 
	//Includes
	include 'conexion.php';
	//Query
	$sql = mysqli_query($dbconnect,"SELECT * FROM ltlkresults ORDER BY id DESC LIMIT 1");
	//Loop Control
	while ($row = mysqli_fetch_array($sql)) {
		$lkfirts = $row['primerpremio'];
		$lksecond = $row['segundopremio'];
		$lkthird = $row['tercerpremio'];
		$lkfdate = $row['fecha'];
		$lkstatus = $row['estado'];

	}

 ?>