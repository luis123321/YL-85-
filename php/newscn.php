<?php 
$query = mysqli_query($dbconnect,"SELECT * FROM recentnews ORDER BY id DESC LIMIT 6");
while ($row = mysqli_fetch_array($query)) {
	//Variables
	$image = $row['image'];
	$title = $row['title'];
	$content = $row['content'];
	$month = $row['month'];
	$day = $row['day'];
	$year = $row['year'];
    $link = $row['link'];

	//Ejecucion

	echo "  <div class='post-item'>
                                    <div class='row'>
                                        <div class='col-md-4'>
                                            <div class='img-hover'>
                                               <img src='CBD33B1EC643BADMIN/php/$image' alt='' class='img-responsive'>
                                               <div class='overlay'><a href='single-news.html'>+</a></div>
                                            </div>
                                        </div>
                                        <div class='col-md-8'>
                                            <h4><a href='single-news.html'>$title</a></h4>
                                            <p class='data-info'>$month $day, $year  / <i class='fa fa-comments'></i><a href='#'>0</a></p>
                                            <p style='word-wrap: break-word;'>$content</p> 
                                                   
                                            <a class='btn' href='p.php?newpost=$link' role='button' id='btnredmore'>Leer Más</a>                                    
                                        </div>
                                   </div>
                                </div>

        ";
	
};

 ?>