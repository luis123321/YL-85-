<?php 

	include 'conexion.php';
	mysqli_set_charset($dbconnect,'utf8');
	$sql = mysqli_query($dbconnect,"SELECT * FROM frontpagecontent ORDER BY id DESC LIMIT 3");
	while ($row = mysqli_fetch_array($sql)) {
		$title = $row['title'];
		$content = $row['content'];
        $img = $row['image'];


		echo "

			<div  data-src='CBD33B1EC643BADMIN/php/$img'>
                    <div class='style-caption fadeFromTop'>
                        <div class='overlay-bg'></div>
                         <div class='container'> 
                            <div class='row'>
                                <div class='col-md-7'>
                                    <h1 class='animated fadeInRight'>
                                        $title
                                    </h1>   
                                    <p class='animated fadeInRight delay1'>$content</p> 
                                    <div class='more animated fadeInRight delay2'>
                                        <a href='#' class='btn btn-primary' name='subscribe'>Mas Informacíon</a>
                                    </div>
                                </div>    
                            </div>                     
                        </div>      
                    </div>
                </div>


		";
};

 ?>