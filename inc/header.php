<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css?v=1" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">
<link rel="manifest" href="images/fav/site.webmanifest">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->


   
  
 <title><?php echo $title; ?></title>
 <meta name="title" content="<?php echo $title; ?>">
<meta name="description" content="<?php echo $meta; ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $meta; ?>">
<meta property="og:image" content="">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="">
<meta property="twitter:title" content="<?php echo $title; ?>">
<meta property="twitter:description" content="<?php echo $meta; ?>">
<meta property="twitter:image" content="">



    <?php 

$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = basename($_SERVER['PHP_SELF'], ".php");

?>

  </head>
 
<body>

<div class="page-wrapper">
   
    
    <!-- Main Header-->
    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left">
                    <div class="text"></div>
                </div>

                <div class="top-right">
                    <ul class="contact-info clearfix">
                        <li><span class="icon fa fa-phone-volume"></span> <a href="tel:+917830666100">+91 78306 66100</a></li>
                        <li><span class="icon fa fa-envelope"></span> <a href="mailto:hello@100Plywood.com">hello@100plywood.com</a></li>
                        
                    </ul>
                    <ul class="social-icon-one clearfix">
                    <li><a href="https://www.facebook.com/100-Plywood-104295975354681"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/100plywood/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/100-plywood"><i class="fab fa-linkedin-in"></i></a></li>
                                 
                                    <li><a href="https://wa.me/917830666100"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!--Header Lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="main-box clearfix">
                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="index.php"><img src="images/logo.webp" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=" dropdown"><a href="index.php">Home</a>
                                      
                                    </li>
                                    <li class="dropdown"><a href="about.php">About</a>
                                        
                                    </li>
                                    <li class="dropdown"><a href="plywood.php">Plywood</a>
                                        <ul>
                                           
                                        
                                <li ><a href="bwp-plywood.php">BWP Plywood</a></li>
                                <li><a href="bwr-plywood.php">BWR Plywood</a></li>
                                <li><a href="mr-plywood.php">MR Plywood</a></li>
                                <li><a href="plywood.php">Explore All Plywood</a></li>
                                    
                                            
                                            
                                            
                                        
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="blockboard.php">Blockboard</a></li>
                                            <li class="dropdown"><a href="flushdoor.php">Flushdoor</a></li>
                                            <li class="dropdown"><a href="veneers.php">Veneers</a></li>
                                   
                                   
                                  
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box">
                           

                            <!-- Btn Box -->
                            <div class="btn-box">
                                <a href="contact.php" class="theme-btn btn-style-one"><span class="btn-title">Contact Us</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" title=""><img src="images/foot-logo.webp" alt="" style="
                        width: 160px;
                        margin: 0 auto;
                    " title=""></a>
                </div>
                <!--Right Col-->
                <div class="nav-outer pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                             <ul class="navigation clearfix">
                                 <!--Keep This Empty / Menu will come through Javascript-->
                                 
                                  <li class="dropdown"><a href="contact.php">Contact</a>
                                      
                                    </li>
                            
                             </ul>
                             
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="images/logo.webp" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->