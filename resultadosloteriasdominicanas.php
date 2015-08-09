<?php include_once 'php/gmltloopcontrol.php'; ?>
<?php include_once 'php/lnltloopcontrol.php'; ?>
<?php include_once 'php/lploopcontroller.php'; ?>
<?php include_once 'php/ltp3loopcontroller.php'; ?>
<?php include_once 'php/ltskloopcontroller.php'; ?>
<?php include_once 'php/ltqploopcontroller.php'; ?>
<?php include_once 'php/ltlpcontroller.php' ?>
<?php include_once 'php/ltqrResults.php' ?>
<?php include_once 'php/ltstrcontroller.php' ?>
<?php include_once 'php/ltlkloopcotroller.php' ?>
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
        <!-- Jquery UI -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
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
            <?php include 'inc/headerbox.php';?>
                <!-- End headerbox-->  
            <?php include 'inc/mainmenu_common.php';?>
                
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
                            <li><a href="index.php">Home</a></li>
                            <li>/</li>
                            <li>Resultados</li>                                       
                        </ul>
                    </div>        
                </div>

                <div class="semiboxshadow text-center">
                    <img src="img/img-theme/shp.png" class="img-responsive" alt="">
                </div>
                   <br>             
                <!-- CANJEAR CONTENT -->
                <div class="container">
                    <div class="col-md-12">

                            <!-- Nacional Panel box   -->
                        <div class="lt-loterry">
                            <div class="panel-box">
                                <div class="ltn-img">
                                    <img src="img/loterry/ltn.jpg" alt="Loteria Nacional" class="img-ltn">
                                </div>
                                <div class="titles <?php echo $gmstatus; ?>" data-toggle="tooltip" data-placement="left" title="Disponible">
                                    <h4><i class="fa fa-circle-o-notch"></i>Gana Más</h4>                                 
                                </div>
                                <div class="container-lt">
                                <div class="content-balls">
                                    <ul class="balls-ul">
                                        <li><?php echo $gmfirts; ?></li>
                                        <li><?php echo $gmsecond; ?></li>
                                        <li><?php echo $gmthird; ?></li>
                                    </ul>
                                </div>
                                <div class="date-numbers">
                                <p><b>Fecha: </b><?php echo $gmfdate; ?></p>
                            </div>
                                </div>
                            </div>
                            </div>
                            <!-- End -->

                            <!-- Nacional Panel box   -->
                        <div class="lt-loterry">
                            <div class="panel-box">
                                <div class="ltn-img">
                                    <img src="img/loterry/ltn.jpg" alt="Loteria Nacional" class="img-ltn">
                                </div>
                                <div class="titles <?php echo $lnstatus; ?>" data-toggle="tooltip" data-placement="left" title="En Espera">
                                    <h4><i class="fa fa-circle-o-notch"></i>Lotería Nacional</h4>                                 
                                </div>
                                <div class="container-lt">
                                <div class="content-balls">
                                    <ul class="balls-ul">
                                        <li><?php echo $lnfirts; ?></li>
                                        <li><?php echo $lnsecond; ?></li>
                                        <li><?php echo $lnthird; ?></li>
                                    </ul>
                                </div>
                                <div class="date-numbers">
                                <p><?php echo $gmfdate; ?></p>
                            </div>
                                </div>
                            </div>
                            </div>
                            <!-- End -->

                            <!-- Nacional Panel box   -->
                        <div class="lt-loterry">
                            <div class="panel-box">
                                <div class="ltn-img">
                                    <img src="img/loterry/sp-lt.jpg" alt="Loto Pool">
                                </div>
                                <div class="titles <?php echo $lpstatus; ?>">
                                    <h4><i class="fa fa-circle-o-notch"></i>Loto Pool</h4>                                 
                                </div>
                                <div class="container-lt">
                                <div class="content-balls">
                                    <ul class="balls-ul">
                                        <li><?php echo $lpbl1; ?></li>
                                        <li><?php echo $lpbl2; ?></li>
                                        <li><?php echo $lpbl3; ?></li>
                                        <li><?php echo $lpbl4; ?></li>
                                        <li><?php echo $lpbl5; ?></li>
                                    </ul>
                                </div>
                                <div class="date-numbers">
                                <p><b>Fecha: </b><?php echo $lpfdate; ?></p>
                            </div>
                                </div>
                            </div>
                            </div>
                            <!-- End -->

                            <!-- Nacional Panel box   -->
                        <div class="lt-loterry">
                            <div class="panel-box">
                                <div class="ltn-img">
                                    <img src="img/loterry/pg3.jpg" alt="Pega 3 Máas">
                                </div>
                                <div class="titles <?php echo $p3status ?>">
                                    <h4><i class="fa fa-circle-o-notch"></i>Pega 3 Más</h4>                                 
                                </div>
                                <div class="container-lt">
                                <div class="content-balls">
                                    <ul class="balls-ul">
                                        <li><?php echo $p3primero ?></li>
                                        <li><?php echo $p3segundo ?></li>
                                        <li><?php echo $p3tercero ?></li>
                                    </ul>
                                </div>
                                <div class="date-numbers">
                                <p><?php echo $p3fdate; ?></p>
                            </div>
                                </div>
                            </div>
                            </div>
                            <!-- End -->

                            <!-- Nacional Panel box   -->
                        <div class="lt-loterry">
                            <div class="panel-box">
                                <div class="ltn-img">
                                    <img src="img/loterry/spk.jpg" alt="Super Kino TV">
                                </div>
                                <div class="titles <?php echo $skstatus ?>">
                                    <h4><i class="fa fa-circle-o-notch"></i>Super Kino TV</h4>                                 
                                </div>
                                <div class="container-lt">
                                <div class="content-balls">
                                    <ul class="balls-ul">
                                        
                                        <li><?php echo $skbl1; ?></li>
                                        <li><?php echo $skbl2; ?></li>
                                        <li><?php echo $skbl3; ?></li>
                                        <li><?php echo $skbl4; ?></li>
                                        <li><?php echo $skbl5; ?></li>
                                        <li><?php echo $skbl6; ?></li>
                                        <li><?php echo $skbl7; ?></li>
                                        <li><?php echo $skbl8; ?></li>
                                        <li><?php echo $skbl9; ?></li>
                                        <li><?php echo $skbl10; ?></li>
                                        <li><?php echo $skbl11; ?></li>
                                        <li><?php echo $skbl12; ?></li>
                                        <li><?php echo $skbl13; ?></li>
                                        <li><?php echo $skbl14; ?></li>
                                        <li><?php echo $skbl15; ?></li>
                                        <li><?php echo $skbl16; ?></li>
                                        <li><?php echo $skbl17; ?></li>
                                        <li><?php echo $skbl18; ?></li>
                                        <li><?php echo $skbl19; ?></li>
                                        <li><?php echo $skbl20; ?></li>
                                    </ul>
                                </div>
                                <div class="date-numbers">
                                <p><?php echo $skfdate; ?></p>
                            </div>
                                </div>
                            </div>
                            </div>
                            <!-- End -->

                            <!-- Nacional Panel box   -->
                        <div class="lt-loterry">
                            <div class="panel-box">
                                <div class="ltn-img">
                                    <img src="img/loterry/qp.jpg" alt="Quiniela Leidsa">
                                </div>
                                <div class="titles <?php echo $qpstatus; ?>" data-toggle="tooltip" data-placement="left" title="En Espera">
                                    <h4><i class="fa fa-circle-o-notch"></i>Quiniela Leidsa</h4>                                 
                                </div>
                                <div class="container-lt">
                                <div class="content-balls">
                                    <ul class="balls-ul">
                                        <li><?php echo $qpprimero; ?></li>
                                        <li><?php echo $qpsegundo; ?></li>
                                        <li><?php echo $qptercero; ?></li>
                                    </ul>
                                </div>
                                <div class="date-numbers">
                                <p><?php echo $qpfdate; ?></p>
                            </div>
                                </div>
                            </div>
                            </div>
                            <!-- End -->

                            <!-- Nacional Panel box   -->
                        <div class="lt-loterry">
                            <div class="panel-box">
                                <div class="ltn-img">
                                   <img src="img/loterry/lt.jpg" alt="Loto - Loto Más">
                                </div>
                                <div class="titles <?php echo $lptstatus ?>">
                                    <h4><i class="fa fa-circle-o-notch"></i>Loto - Loto Más</h4>                                 
                                </div>
                                <div class="container-lt">
                                <div class="content-balls">
                                    <ul class="balls-ul">
                                        <li><?php echo $lptbl1 ?></li>
                                        <li><?php echo $lptbl2 ?></li>
                                        <li><?php echo $lptbl3 ?></li>
                                        <li><?php echo $lptbl4 ?></li>
                                        <li><?php echo $lptbl5 ?></li>
                                        <li><?php echo $lptbl6 ?></li>
                                        <li><?php echo $lptblmas ?></li>
                                    </ul>
                                </div>
                                <div class="date-numbers">
                                <p><?php echo $lptfdate; ?></p>
                            </div>
                                </div>
                            </div>
                            </div>
                            <!-- End -->

                            <!-- Nacional Panel box   -->
                        <div class="lt-loterry">
                            <div class="panel-box">
                                <div class="ltn-img">
                                     <img src="img/loterry/Quiniela-Real.png" alt="Loto Real">
                                </div>
                                <div class="titles <?php echo $qrstatus; ?>">
                                    <h4><i class="fa fa-circle-o-notch"></i>Quiniela Real</h4>                                 
                                </div>
                                <div class="container-lt">
                                <div class="content-balls">
                                    <ul class="balls-ul">
                                        <li><?php echo $qrfirts; ?></li>
                                        <li><?php echo $qrsecond; ?></li>
                                        <li><?php echo $qrthird; ?></li>
                                    </ul>
                                </div>
                                <div class="date-numbers">
                                <p><?php echo $qrfdate; ?></p>
                            </div>
                                </div>
                            </div>
                            </div>
                            <!-- End -->


                            <!-- Nacional Panel box   -->
                        <div class="lt-loterry">
                            <div class="panel-box">
                                <div class="ltn-img">
                                    <img src="img/loterry/lt-real.jpg" alt="Loto Real"> 
                                </div>
                                <div class="titles <?php echo $strstatus; ?>">
                                    <h4><i class="fa fa-circle-o-notch"></i>Loto Real</h4>                                 
                                </div>
                                <div class="container-lt">
                                <div class="content-balls">
                                    <ul class="balls-ul">
                                        <li><?php echo $strbl1; ?></li>
                                        <li><?php echo $strbl2; ?></li>
                                        <li><?php echo $strbl3; ?></li>
                                        <li><?php echo $strbl4; ?></li>
                                        <li><?php echo $strbl5; ?></li>
                                        <li><?php echo $strbl6; ?></li>
                                    </ul>
                                </div>
                                <div class="date-numbers">
                                <p><?php echo $strfdate; ?></p>
                            </div>
                                </div>
                            </div>
                            </div>
                            <!-- End -->

                            <!-- Nacional Panel box   -->
                        <div class="lt-loterry">
                            <div class="panel-box">
                                <div class="ltn-img">
                                    <img src="img/loterry/mgltk.jpg" alt="Mega Loteka">
                                </div>
                                <div class="titles <?php echo $lkstatus; ?>">
                                    <h4><i class="fa fa-circle-o-notch"></i>Quiniela Loteka</h4>                                 
                                </div>
                                <div class="container-lt">
                                <div class="content-balls">
                                    <ul class="balls-ul">
                                        <li><?php echo $lkfirts; ?></li>
                                        <li><?php echo $lksecond; ?></li>
                                        <li><?php echo $lkthird; ?></li>
                                    </ul>
                                </div>
                                <div class="date-numbers">
                                <p><?php echo $lkfdate;; ?></p>
                            </div>
                                </div>
                            </div>
                            </div>
                            <!-- End -->
                    </div>
                </div>
                <!-- END  -->
                    
                                           
        <!-- Players --> 
        <div class="container">
            <div class="col-md-12">
                <p class="p-help" class="fa-arrow-right">
            ¡Buenas! , Gracias por visitar YourLoteria. ¿No encontraste lo que buscabas? Haz click <a class="clk-a" href="contact.html" target="_blank">aquí</a> & haznoslo llegar.
        </p>
            </div>
        </div>
                <!-- Sponsors -->
                <div class="section-wide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h2>Empresas que confían en nosotros <span class="text-resalt">YourLoteria</span></h2>
                                    <p>¿Quieres ser parte de nosotros?  ¡entra en la secesión de contacto y escríbenos!</p>


                                </div>
                                <ul id="sponsors" class="tooltip-hover">
                                    <li data-toggle="tooltip" title data-original-title="Grupo Lanfranco S.R.L"> <a href="#"><img src="img/sponsors/1.png" alt="Image"></a></li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/2.png" alt="Image"></a></li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/3.png" alt="Image"></a></li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/4.png" alt="Image"></a></li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/5.png" alt="Image"></a></li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/3.png" alt="Image"></a></li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/4.png" alt="Image"></a></li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor"> <a href="#"><img src="img/sponsors/3.png" alt="Image"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- End Sponsors -->  
            </section>
            <!-- End Section Area - Content Central -->
            <?php include 'inc/footer_common.php' ?>
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
        <!-- LOAD -->
        <script type="text/javascript" src="js/inc.js"></script>
        <!-- END LOAD -->
        <!-- ======================= End JQuery libs =========================== -->
 
    </body>
</html>