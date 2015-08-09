<?php 
	//Includes
	include 'conexion.php';
	//Query
	$sql = mysqli_query($dbconnect,"SELECT * FROM ltskresults ORDER BY id DESC LIMIT 1");
	//Loop Control
	while ($row = mysqli_fetch_array($sql)) {
		$skbl1 = $row['sk1'];
		$skbl2 = $row['sk2'];
		$skbl3 = $row['sk3'];
		$skbl4 = $row['sk4'];
		$skbl5 = $row['sk5'];
		$skbl6 = $row['sk6'];
		$skbl7 = $row['sk7'];
		$skbl8 = $row['sk8'];
		$skbl9 = $row['sk9'];
		$skbl10 = $row['sk10'];
		$skbl11 = $row['sk11'];
		$skbl12 = $row['sk12'];
		$skbl13 = $row['sk13'];
		$skbl14 = $row['sk14'];
		$skbl15 = $row['sk15'];
		$skbl16 = $row['sk16'];
		$skbl17 = $row['sk17'];
		$skbl18 = $row['sk18'];
		$skbl19 = $row['sk19'];
		$skbl20 = $row['sk20'];
		$skfdate = $row['fecha'];
		$skstatus = $row['estado'];
	}

 ?>