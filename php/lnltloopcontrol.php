<?php 
	//Includes
	include 'conexion.php';
	//Query
	$sql = mysqli_query($dbconnect,"SELECT * FROM ltlnresults ORDER BY id DESC LIMIT 1");
	//Loop Control
	while ($row = mysqli_fetch_array($sql)) {
		$lnfirts = $row['primerpremio'];
		$lnsecond = $row['segundopremio'];
		$lnthird = $row['tercerpremio'];
		$lnfdate = $row['fecha'];
		$lnstatus = $row['estado'];

	}

 ?>