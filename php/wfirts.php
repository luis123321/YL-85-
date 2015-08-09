<?php 
include 'conexion.php';
$sql = mysqli_query($dbconnect,"SELECT * FROM widgetfirts WHERE WidgetID = 1");
$row = mysqli_fetch_array($sql);
$tl1 = $row['title'];
$ct1= $row['content'];
 ?>