<?php 
    $newpost = $_GET['newpost'];
    include 'php/conexion.php';

    $query = mysqli_query($dbconnect,"SELECT * FROM newpost WHERE news = $newpost");
    $row = mysqli_fetch_array($query);
    $title = $row['title'];
    $content = $row['content'];
    $content1 = $row['content1'];
    $content2 = $row['content2'];
    $content3 = $row['content3'];
    $img = $row['image'];
    $day = $row['day'];
    $year = $row['year'];
    $month = $row['month'];

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>YourLoteria - Loterias Dominicanas & Internacionales - Loteria Nacional - LEIDSA - Loto Real - Loteka</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="World Cup - Responsive HTML5 Template soccer and sports">
        <meta name="author" content="iwthemes.com">  

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Theme CSS -->
        <link href="css/style.css" rel="stylesheet" media="screen">
        <!-- Responsive CSS -->
        <link href="css/theme-responsive.css" rel="stylesheet" media="screen">
        <!-- Skins Theme -->
        <link href="#" rel="stylesheet" media="screen" class="skin">

        <!-- Favicons -->
        <link rel="shortcut icon" href="img/icons/favicon-loterry.ico">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  

        <!-- Head Libs -->
        <script src="js/modernizr.js"></script>

        <!--[if IE]>
            <link rel="stylesheet" href="css/ie/ie.css">
        <![endif]-->

        <!--[if lte IE 8]>
            <script src="js/responsive/html5shiv.js"></script>
            <script src="js/responsive/respond.js"></script>
        <![endif]-->

        <!-- Skins Changer-->
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    </head>

    <body>
            

        <!-- layout-->
        <div id="layout">
            <!-- Header-->
            <header>
                <!-- End headerbox-->
                <?php include 'inc/headerbox.php' ?>
                <!-- End headerbox-->  

                <!-- mainmenu-->
                <?php include 'inc/mainmenu_common.php' ?>
                <!-- End mainmenu-->
            </header>
            <!-- End Header-->
            
            <!-- Section Title -->           
           <section class="section-title">
                <div class="col-md-12">
                    <div class="row">
                    <br>
                            <div class="col-md-10 col-md-offset-2">
                                <img src="img/adds/banner.jpg" alt="" class="img-responsive">
                            </div>
                    </div>
                </div>
            </section>
            <!-- End Section Title --> 

            <!-- Section Area - Content Central -->
            <section class="content-info">

                <div class="crumbs">
                    <div class="container">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li><a href="#">News</a></li>
                            <li>/</li>
                            <li><?php echo $title; ?></li>                                       
                        </ul>
                    </div>        
                </div>

                <div class="semiboxshadow text-center">
                    <img src="img/img-theme/shp.png" class="img-responsive" alt="">
                </div>

                <!-- Content Central -->
                <div class="container padding-top">
                    <div class="row">
                        
                        <!-- content Column Left -->
                        <div class="col-md-8">                     
                            <!-- Single Post -->
                            <div class="panel-box">

                                <!-- Title Post -->
                                <div class="titles">
                                    <h4><?php echo $title; ?></h4>
                                </div>
                                <!-- Title Post -->

                                <!-- Post Item -->
                                <div class="post-item single-news">
                                    <div class="row">
                                        <!-- Image Post -->
                                        <div class="col-md-12">
                                            <p class="data-info"><?php echo $day ."-"; echo $month ."-"; echo $year; ?>  / <i class="fa fa-comments"></i><a href="#">5</a></p>
                                            <!-- Mini SLide --> 
                                            <img src="CBD33B1EC643BADMIN/php/<?php echo $img; ?>" alt="" id="resImg">
                                            <!-- End Mini SLide -->
                                        </div>
                                        <!-- Image Post -->

                                        <!-- Info Post -->
                                        <div class="col-md-12 padding-top-mini" id="pcontent">

                                            <p><?php echo $content; ?></p>
                                             <p><?php echo $content1; ?></p>
                                              <p><?php echo $content2; ?></p>
                                               <p><?php echo $content3; ?></p>
                                        </div>
                                        <!-- End Info Post -->
                                   </div>
                                </div>
                                 <!-- End Post Item -->
                            </div>  
                            <!-- End Single Post --> 

                            <!-- Comments --> 
                            <!-- End Comments --> 

                            <!-- Comment Form --> 
                            <div class="panel-box">
                                <!-- Title Post -->
                                <div class="titles">
                                    <h4>Facebook Coment</h4>
                                </div>
                                <div class="row">
                                     <!-- Form coment -->
                                        <div class="fb-comments" data-href="https://www.facebook.com/pages/YourLoteria/399200626909236?ref=aymt_homepage_panel" data-width="100%" data-numposts="5"></div>
                                    <!-- End Form coment -->
                                </div>
                            </div>
                            <!-- End Comment Form --> 
                        </div>
                         <!-- End content Left -->

                        <!-- content Sidebar Right -->
                        <aside class="col-md-4">                     
                            

                            <!-- Video presentation -->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4>Presentation</h4>
                                </div>
                                <!-- Locations Video --> 
                                <div class="row">
                                    <iframe src="//www.youtube.com/embed/l12OhR6nxiM" class="video"></iframe>
                                    <div class="col-md-12">
                                        <h4>Rio de Janeiro</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris.</p>
                                    </div>
                                </div>
                                <!-- End Locations Video --> 
                            </div>  
                            <!-- End Video presentation-->

                            <!-- Widget Categories-->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4>Categories</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list">
                                            <li><i class="fa fa-check"></i><a href="#">Design</a></li>
                                            <li><i class="fa fa-check"></i><a href="#">Photos</a></li>
                                            <li><i class="fa fa-check"></i><a href="#">Videos</a></li>
                                            <li><i class="fa fa-check"></i><a href="#">Lifestyle</a></li>
                                            <li><i class="fa fa-check"></i><a href="#">Technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                            <!-- End Widget Categories-->  

                            <!-- Widget Text-->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4>Widget Text</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>
                                    </div>
                                </div>
                            </div>  
                            <!-- End Widget Text-->

                            <!-- Info -->

                            <!-- End Info-->

                        </aside>
                        <!-- End content Sidebar Right -->
                    </div>                     
                </div>  
                <!-- End Content Central -->

                <!-- Newsletter -->
                <div class="section-wide">
                    <div class="container">
                        <div class="row newsletter">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h2>Enter your e-mail and <span class="text-resalt">subscribe</span> to our newsletter.</h2>
                                    <p>Duis non lorem porta,  eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat.</p>
                                </div>
                                <form id="newsletterForm" action="php/mailchip/newsletter-subscribe.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input class="form-control" placeholder="Your Name" name="name"  type="text" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input class="form-control" placeholder="Your  Email" name="email"  type="email" required="required">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="submit" name="subscribe" >SIGN UP</button>
                                                 </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>   
                                <div id="result-newsletter"></div>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- End Newsletter -->  
            </section>
            <!-- End Section Area -  Content Central -->
      
            <!-- footer-->
            <footer id="footer">
                <div class="container">

                    <!-- Wiguets Footer-->
                    <div class="row">

                        <!-- Twitter Wiguet-->
                        <div class="col-xs-12 col-sm-7 col-md-3 col-lg-4">
                            <div class="divisor-footer">
                                <i class="fa fa-twitter twit-list"></i>
                                <h4>Latest Tweet</h4>                     
                                <div id="twitter"></div>   
                            </div>
                        </div>
                        <!-- End Twitter Wiguet-->

                        <!-- Tags Wiguet-->
                        <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3">
                            <div class="tags">                              
                                <h4>Tags</h4>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> corporate </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> theme </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> css3 </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> premium </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> html5 </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> business </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> all purpose </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> Js </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> muse </a>
                            </div>
                        </div>
                        <!-- End Tags Wiguet-->
                        
                        <!-- Links Wiguet-->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">                            
                            <h4>Recent Links</h4>
                            <ul class="links">
                                <li><i class="fa fa-check"></i> <a href="#">World Cup</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Teams Members</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Soccer Champion</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Champions</a></li>
                            </ul>                            
                        </div>
                        <!-- End Links Wiguet-->

                        <!-- flickr Wiguet-->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">                            
                            <h4>Recent flickr</h4>
                            <ul id="flickr" class="thumbs"></ul>                            
                        </div>
                        <!-- End flickr Wiguet-->
                    </div>
                    <!-- End Wiguets Footer-->

                    <!-- Social Icons-->
                    <div class="row">
                        <ul class="social">
                                <li>
                                    <div>
                                        <a href="#" class="facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#" class="twitter-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#" class="vimeo">
                                            <i class="fa fa-vimeo-square"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="#" class="google-plus">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </li> 
                                <li>
                                    <div>
                                        <a href="#" class="youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </div>
                                </li> 
                        </ul>
                    </div> 
                    <!-- End Social Icons-->

                </div>
            </footer>      
            <!-- End footer-->

            <!-- footer Down-->
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <p>&copy; 2014 WordCup . All Rights Reserved.  1995 - 2014</p>
                        </div>
                        <div class="col-md-7">
                            <!-- Nav Footer-->
                            <ul class="nav-footer">
                                <li><a href="#">HOME</a> </li>
                                <li><a href="#">EVENTS</a></li>
                                <li><a href="#">TEAM</a></li> 
                                <li><a href="#">GALLERY</a></li> 
                                <li><a href="#">SPORT</a></li>                
                                <li><a href="#">CONTACT</a></li>
                            </ul>
                            <!-- End Nav Footer-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer Down-->

        </div>
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local--> 
        <script src="js/jquery.js"></script>                
        <!--Nav-->
        <script type="text/javascript" src="js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="js/nav/hoverIntent.js"></script>   
        <script type="text/javascript" src="js/nav/superfish.js"></script> 
        <script src="js/nav/jquery.sticky.js" type="text/javascript"></script>    
        <!--Totop-->
        <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
         <!--Accorodion-->
        <script type="text/javascript" src="js/accordion/accordion.js" ></script>  
        <!--Slide-->
        <script type="text/javascript" src="js/slide/camera.js" ></script>      
        <script type='text/javascript' src='js/slide/jquery.easing.1.3.min.js'></script>    
        <!-- Maps -->
        <script src="js/maps/gmap3.js"></script>           
        <!--Ligbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script> 
        <!-- carousel.js-->
        <script src="js/carousel/carousel.js"></script>
        <!-- Filter -->
        <script src="js/filters/jquery.isotope.js" type="text/javascript"></script>
        <!-- Twitter Feed-->
        <script src="js/twitter/jquery.tweet.js"></script> 
        <!-- flickr Feed-->
        <script src="js/flickr/jflickrfeed.min.js"></script> 
        <!-- Counter -->
        <script src="js/counter/jquery.countdown.js"></script>      
        <!--Theme Options-->
        <script type="text/javascript" src="js/theme-options/theme-options.js"></script>
        <script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script> 
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script> 
        <!--MAIN FUNCTIONS-->
        <script type="text/javascript" src="js/main.js"></script>
        <!-- ======================= End JQuery libs =========================== -->
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3&appId=128434693861954";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>