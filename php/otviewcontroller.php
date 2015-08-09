<?php 
	include 'conexion.php';
	$query = mysqli_query($dbconnect,"SELECT * FROM outstandingnews ORDER BY day ASC LIMIT 6");
	while ($rows = mysqli_fetch_array($query)) {
		$day = $rows['day'];
		$month = $rows['month'];
		$year = $rows['year'];
		$usertipe = $rows['usertipe'];
		$title = $rows['titlect'];
		$content = $rows['content'];
		$image = $rows['image'];
        mysqli_set_charset($dbconnect,'utf8');
		echo "
				                                        <li>
                                            <div class='header-post'>
                                                <div class='date'>
                                                    <span>$day/$month</span>
                                                    $year
                                                </div>
                                                <a href='single-news.html'><img src='../D11988B5FFD178FCPAGE/CBD33B1EC643BADMIN/php/$image' alt='' class='rsimage'></a>
                                                <div class='meta-tag'>
                                                    <ul>
                                                        <li><i class='fa fa-user'></i><a href='#'>$usertipe</a></li>
                                                        <li><i class='fa fa-folder-open'></i><a href='#'>Design</a></li>
                                                        <li class='text-right'><i class='fa fa-comment'></i><a href='#'>10</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class='info-post'>
                                                <h4><a href='single-news.html'>$title</a></h4>
                                                <p>$content</p>
                                            </div>
                                        </li>



		";
	};



 ?>