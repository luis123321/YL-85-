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
                    <?php include 'inc/headerbox.php'; ?>
                <!-- End headerbox-->   

                <!-- mainmenu-->
                <?php include 'inc/mainmenu_common.php'; ?>
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
                            <li><a href="#">Pages</a></li>
                            <li>/</li>
                            <li>Contact Us</li>                                       
                        </ul>
                    </div>        
                </div>

                <div class="semiboxshadow text-center">
                    <img src="img/img-theme/shp.png" class="img-responsive" alt="">
                </div>

                <!-- Google Map --> 
                <div id="map"></div>
                <!-- End Google Map --> 

                <!-- Content Central -->
                <section class="container">
                    <div class="row padding-top"> 
                        <!-- Left Content -->
                        <div class="col-md-4">
                            <aside class="panel-box">
                                <div class="titles">
                                    <h4>The Office</h4>
                                </div>
                                <address>
                                  <strong>Sports Cup, Inc.</strong><br>
                                  <i class="fa fa-map-marker"></i><strong>Address: </strong> fa795 Folsom Ave, Suite 600<br>
                                  <i class="fa fa-plane"></i><strong>City: </strong>San Francisco, CA 94107<br>
                                  <i class="fa fa-phone"></i> <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </aside>

                            <aside class="panel-box">
                                <div class="titles">
                                    <h4>Emails Contact</h4>
                                </div>
                                <address>
                                  <i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:#"> sales@sportscup.com</a><br>
                                  <i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:#"> support@sportscup.com</a>
                                </address>
                            </aside>
                        </div>
                        <!-- End Left Content -->

                        <!-- Right Content -->
                        <div class="col-md-8">
                            <div class="panel-box">
                                <div class="titles">
                                    <h4>Contact Form</h4>
                                </div>
                                <!-- Form Contact -->
                                <form class="form-theme" action="php/send-mail.php">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Your name *</label>
                                                <input type="text"  required="required" value="" maxlength="100" class="form-control" name="Name" id="name">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Your email address *</label>
                                                <input type="email"  required="required" value="" maxlength="100" class="form-control" name="Email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Comment *</label>
                                                <textarea maxlength="5000" rows="10" class="form-control" name="message"  style="height: 138px;" required="required" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" value="Send Message" class="btn btn-lg btn-primary">
                                        </div>
                                    </div>
                                </form>
                                <!-- End Form Contact --> 
                                <div class="result"></div>
                            </div>
                        </div> 
                        <!-- End Right Content -->         
                    </div>    
                </section>
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
            <!-- End Section Area - Content Central -->
      
            <!-- footer-->
            <?php include 'inc/footer_common.php'; ?>

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
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
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
 
    </body>
</html>