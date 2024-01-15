<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/logo.png"/>
    <title><?php echo $page_title; ?></title>
     <meta name="description" content="<?php echo $page_description;?> ">
    <link rel='stylesheet' href='revslider/css/settings.css' type='text/css' media='all' />

    <link rel='stylesheet' href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/main.css?v=1.110' type='text/css' media='all' />

    <link rel="icon" href="img/logo.png" sizes="32x32" />
    <link rel="icon" href="img/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="img/logo.png">
    <meta name="msapplication-TileImage" content="img/logo.png">
</head>

<body class="home page wide wave-style">
    <div class="page">
        <!-- top panel -->
        <div class='site_top_panel wave'>
            <!-- canvas -->
            <div class='top_half_sin_wrapper'>
                <canvas class='top_half_sin' data-bg-color='#ffffff' data-line-color='#ffffff'></canvas>
            </div>
            <!-- / canvas -->
            <div class='container'>
                <div class='row_text_search'>
                    <div id='top_panel_text'><a href="#"><i class="fa fa-phone-square"></i> +91 70920 02244 &nbsp;&nbsp;/ +91 44 4868 8051 </a>
                        <a href="mailto:Cocoplaynut@gmail.com"> <i class="fa fa-envelope-o"></i>Cocoplaynut@gmail.com</a>
                    </div>
                </div>
                <div id='top_panel_links'>
                    <div id='top_social_links_wrapper'>
                        <div class=''><a href='https://www.facebook.com/cocoplaynut/' target="_blank" class='cws_social_link' title='Facebook'><i class='share-icon fa fa-facebook'></i></a>&nbsp;&nbsp;&nbsp;<a href='https://www.instagram.com/cocoplaynut/' target="_blank"  class='cws_social_link' title='Instagram'><i class='share-icon fa fa-instagram'></i></a></div>
                    </div>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                
            </div>
        </div>
        <!-- / top panel -->
        <!-- slider and menu container -->
        <div class='<?php echo $bread_crumb_title==='Home'?'slider_vs_menu':'' ?>'>
            <div class='header_cont'>
                <div class='header_mask'>
                    <div class='header_pattern'></div>
                </div>
                <header class='site_header logo-in-menu' data-menu-after="3">
                    <div class="header_box">
                        <div class="container">
                            <!-- logo -->
                            <div class="header_logo_part with_border" role="banner">
                                <a class="logo" href="index.html" style="background-color:#f2f2f2;"><img src='img/logo.png' data-at2x='img/logo.png' alt /></a>
                            </div>
                            <!-- / logo -->
                            <!-- menu -->
                            <div class="header_nav_part">
                                <nav class="main-nav-container a-right">
                                    <div class="mobile_menu_header">
                                        <i class="mobile_menu_switcher"><span></span><span></span><span></span></i>
                                    </div>
                                    <ul id="menu-main-menu" class="main-menu menu-bees">
                                        <!-- menu item -->
                                        <li class="menu-item current-menu-item page_item current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children bees-start">
                                            <a href="index.html">
                                                <div class="bees bees-start"><span></span>
                                                    <div class="line-one"></div>
                                                    <div class="line-two"></div>
                                                </div>Home
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed"></canvas>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- / menu item -->
                                        <!-- menu item -->
                                        <li class="menu-item menu-item-has-children right"><a href="#">Facilities<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a>
                                            <span class='button_open'></span>
                                            <ul class="sub-menu">
                                                <li class="menu-item back"><a href="#"><em>←</em>&nbsp;BACK</a>
                                                </li>
                                                <li class="menu-item"><a href="indoor-facilities.html">Indoor Facilities</a></li>
                                                <li class="menu-item"><a href="outdoor-facilities.html">Outdoor Facilities</a></li>
                                            </ul>
                                        </li>
                                        <!-- / menu item -->
                                        <!-- menu item -->
                                         <li class="menu-item menu-item-has-children right"><a href="parties.html">Parties<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a>
                                        </li>
                                        <!--<li class="menu-item menu-item-has-children right"><a href="">Parties<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a>-->
                                        <!--    <span class='button_open'></span>-->
                                        <!--    <ul class="sub-menu">-->
                                        <!--        <li class="menu-item back"><a href="#"><em>←</em>&nbsp;BACK</a>-->
                                        <!--        </li>-->
                                        <!--        <li class="menu-item"><a href="birthdays.html">Birthdays</a></li>-->
                                        <!--        <li class="menu-item"><a href="other-parties.html">Others</a></li>-->
                                        <!--    </ul>-->
                                        <!--</li>-->
                                        <!-- / menu item -->
                                        <!-- menu item -->
                                        <li class="menu-item menu-item-has-children right"><a href="activities.html">Activities<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a>
                                        </li>
                                        <!-- / menu item -->
                                         <!-- menu item -->
                                         <li class="menu-item menu-item-has-children right"><a href="gallery.html">Gallery<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a>
                                        </li>
                                        <!-- / menu item -->
                                        <!-- menu item -->
                                        <li class="menu-item right bees-end">
                                            <a href="contact-us.html">
                                                <div class="bees bees-end"><span></span>
                                                    <div class="line-one"></div>
                                                    <div class="line-two"></div>
                                                </div>Contact
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed"></canvas>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- / menu item -->
                                    </ul>
                                </nav>
                            </div>
                            <!-- / menu -->
                        </div>
                    </div>
                </header>
                <!-- #masthead -->
            </div>

            <!-- breadcrumbs -->
<section class='page_title wave <?php echo $bread_crumb_title==='Home'?'d-none':'' ?> '>
            <div class='container'>
                <div class='title'>
                    <h1><?php echo $bread_crumb_title;?></h1></div>
                <nav class="bread-crumbs"><a href="index.html">Home</a><i class="delimiter fa fa-chevron-right"></i><span class="current"><?php echo $bread_crumb_title;?></span></nav>
                <!-- .breadcrumbs -->
            </div>
            <canvas class='breadcrumbs' data-bg-color='#f8f2dc' data-line-color='#f9e8b2'></canvas>
        </section>
        <!-- / breadcrumbs -->
