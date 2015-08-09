<?php 
	//Includes
	include 'conexion.php';
	//Query
	$sql = mysqli_query($dbconnect,"SELECT * FROM lttpresults ORDER BY id DESC LIMIT 1");
	//Loop Control
	while ($row = mysqli_fetch_array($sql)) {
			$lptbl1 = $row['bl1'];
			$lptbl2 = $row['bl2'];
			$lptbl3 = $row['bl3'];
			$lptbl4 = $row['bl4'];
			$lptbl5 = $row['bl5'];
			$lptbl6 = $row['bl6'];
			$lptblmas = $row['blmas'];
			$lptfdate = $row['fecha'];
			$lptstatus = $row['estado'];

	}

 ?>