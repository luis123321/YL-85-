<?php 
	//Includes
	include 'conexion.php';
	//Query
	$sql = mysqli_query($dbconnect,"SELECT * FROM ltstrresults ORDER BY id DESC LIMIT 1");
	//Loop Control
	while ($row = mysqli_fetch_array($sql)) {
			$strbl1 = $row['bl1'];
			$strbl2 = $row['bl2'];
			$strbl3 = $row['bl3'];
			$strbl4 = $row['bl4'];
			$strbl5 = $row['bl5'];
			$strbl6 = $row['bl6'];
			$strfdate = $row['fecha'];
			$strstatus = $row['estado'];

	}

 ?>