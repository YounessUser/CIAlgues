<!--
        Author: W3layouts
        Author URL: http://w3layouts.com
        License: Creative Commons Attribution 3.0 Unported
        License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <!-- Head -->

    <head>
        <title>C.I Algus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <link href="<?php echo url_for('stylesheets/css/JiSlider.css'); ?>" rel="stylesheet">
        <!-- banner js-->

        <link rel="stylesheet" href="<?php echo url_for('stylesheets/css/flexslider.css'); ?>" type="text/css" media="screen" />
        <!-- Testimonials js-->

        <link href="<?php echo url_for('stylesheets/css/simplelightbox.min.css'); ?>" rel='stylesheet' type='text/css'>
        <!-- lightbox css -->
        <!-- gallery js -->

        <!-- default css files -->
        <link rel="stylesheet" href="<?php echo url_for('stylesheets/css/bootstrap.css'); ?>" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo url_for('stylesheets/css/style.css'); ?>" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo url_for('stylesheets/css/font-awesome.min.css'); ?>" />
        <?php include(SHARED_PATH . "/staff_header_css.php"); ?>

        <!-- default css files -->

        <!--web font-->
        <link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <!--//web font-->

    </head>

    <!-- Body -->

    <body>

        <!-- banner -->
        <div class="main_section_agile" id="home">
            <a class="navbar-brand logoBrand" href="<?php echo url_for("/index.php"); ?>"><span class="lightGreen">CI</span><span class="bgGreen">Algues</span><span class="yearLogo"><sub>2018</sub></span></a>
            <!--<a  href="<?php // echo url_for("/index.php"); ?>"><img src="<?php // echo url_for("/stylesheets/img/logoCIAlgues.png"); ?>" class="navbar-brand logoBrand" alt="CIAlgues" ></a>-->
            <div class="container-fluide">
                <div class="agileits_w3layouts_banner_nav">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header navbar-left">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                            <nav class="menu--iris">
                                <ul class="nav navbar-nav menu__list ">
                                    <li ><a href="<?php echo url_for("/index.php"); ?>" class="bordre" ><i class="fa fa-home"></i> Accuiel</a></li>
                                    <li ><a href="<?php echo url_for("/staff/pages/Presentation.php"); ?>" class=" bordre"><i class="fa fa-user"></i> Presentation</a></li>
                                    <li ><a href="<?php echo url_for("/staff/pages/Themes.php"); ?>" class=" bordre"><i class="fa fa-tasks"></i> Thèmes</a></li>
                                    <li ><a href="<?php echo url_for("/staff/pages/Calendrier.php"); ?>" class=" bordre"><i class="fa fa-calendar"></i> Calendrier</a></li>
                                    <li ><a href="<?php echo url_for("/staff/pages/Programme.php"); ?>" class=" bordre"><i class="fa fa-list"></i> Programme</a></li>
                                    <li ><a href="<?php echo url_for("/staff/pages/Inscription.php"); ?>" class=" bordre"><i class="fa fa-file"></i> Inscription</a></li>
                                    <li ><a href="<?php echo url_for("/staff/pages/FraisInscription.php"); ?>" class=" bordre"><i class="fa fa-euro"></i> Frais</a></li>

                                    <li ><a href="<?php echo url_for("/staff/pages/commite.php"); ?>" class=" bordre"><i class="fa fa-group"></i> Comite</a></li>
                                    <li ><a href="<?php echo url_for("/staff/pages/Hebergement.php"); ?>" class=" bordre"><i class="fa fa-hotel"></i> Hebergement</a></li>
                                    <li ><a href="<?php echo url_for("/staff/pages/Contact.php"); ?>" ><i class="fa fa-envelope"></i> Contact</a></li>
                                </ul>
                                <div class="w3_agileits_social">
                                    <div class="social-icon">
                                        <a href="<?php echo url_for("/staff/connection/login.php"); ?>" class=" "><i class="fa fa-sign-in"></i> Se connecter</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

<!--<input type="color" value="#aebe27" >-->