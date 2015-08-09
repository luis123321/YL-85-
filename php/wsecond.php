<?php 
include 'conexion.php';
$sql = mysqli_query($dbconnect,"SELECT * FROM widgetfirts WHERE WidgetID = 2");
$row = mysqli_fetch_array($sql);
$tl2 = $row['title'];
$ct2= $row['content'];
 ?>