<?php 
	//Includes
	include 'conexion.php';
	//Query
	$sql = mysqli_query($dbconnect,"SELECT * FROM ltlpresults ORDER BY id DESC LIMIT 1");
	//Loop Control
	while ($row = mysqli_fetch_array($sql)) {
		$lpbl1 = $row['bl1'];
		$lpbl2 = $row['bl2'];
		$lpbl3 = $row['bl3'];
		$lpbl4 = $row['bl4'];
		$lpbl5 = $row['bl5'];
		$lpstatus = $row['estado'];
		$lpfdate = $row['fecha'];

	}

 ?>