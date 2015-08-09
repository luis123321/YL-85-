<?php 

include 'conexion.php';
$sql  = mysqli_query($dbconnect,"SELECT * FROM widgetfirts");
while ($row = mysqli_fetch_array($sql) {
	$title = $row['title'];
	$content = $row['content'];


	echo "

			<div class='panel panel-default'>
			  						<div class='panel-heading'>$title</div>
			  							<div class='panel-body'>
			  								$content
			  							</div>
			</div>


	";
}


 ?>