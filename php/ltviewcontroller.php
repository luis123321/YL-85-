<?php
//Variable de conexion a la bade de datos
include 'conexion.php';

//Consulta de la bade de datos
$query = mysqli_query($dbconnect,"SELECT * FROM lotowinners ORDER BY id DESC LIMIT 6");


//Loop de ejecucion
while ($row = mysqli_fetch_array($query)) {
	$image = $row['image'];
	$name = $row['name'];
	$lsname = $row['lastname'];
	$desc = $row['description'];

	echo "
	
	<li class='item-player'>
        <img src='../D11988B5FFD178FCPAGE/CBD33B1EC643BADMIN/php/$image' alt='' class='img-responsive ltimg'>
        <div class='info-player'>
            <h4><a href='#'>$name</a></h4>
            <h5><span>$lsname</span></h5>
            <div class='overlay-player'>
                <p>$desc</p>
            </div>
        </div>
    </li>
	
	";
}

 ?>