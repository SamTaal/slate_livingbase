<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/appleicon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,700' rel='stylesheet' type='text/css'>

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >


<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- HEADER UPPER -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->

<header class="header-boven">
    <div class="header-boven-contact u-gridContainer u-gridRow">
        <div class="header-boven-contact-wrapper1 u-gridCol6">
            <a href="#"><img class="header-boven-contact-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" ></a>
        </div>
        <div class="header-nummer u-gridCol6">
            <img style="position: relative; top: 6px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/phoneicon.png" /> 078 - 3031826
        </div>
    </div>
</header> 

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- NAVIGATION -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->

<nav class="header-midden">
    <nav class="Bot-Nav">
        <div class="u-gridContainer header-midden-nav">
            <div class="Nav-toggle u-cf">
                <div class="twitterres">
                <a href="https://twitter.com/info_livingbase">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twittericon.png"
                </a>
                </div>
                <a class="Navigation-menuToggle" id="js-navCollapse">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-menu2"></use>
                    </svg>
                </a>
            </div>
 
            <?php include 'includes/navigation.php'; ?>
            
            <div class="twitter">
                <a href="https://twitter.com/info_livingbase">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twittericon.png" />
                </a>
            </div>
            <!--<div class="Mob-contact-ico">
                <a class="Button Button--transparent u-textInverted u-noLine nummer-icon" href="tel:070123456">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-phone"></use> 
                    </svg>
                </a>
            
                    <a class="Button Button--transparent u-textInverted u-noLine email-icon" href="mailto:dylan@lokaalgevonden.nl">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-envelope"></use>
                    </svg>
                </a>
            </div>-->
        </div>
    </nav>         
</nav>

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- BX-SLIDER -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->

<div class="header-onderkant"><!-- onderkant header slider-->
            <div class="slogan">De juiste keuze als woon-werkvloer</div>
            <div class="Slider"> <!-- Dit is de slider in de onderkant header -->
                
                    <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider1.png" >
                    <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider2.png" >
            </div>   <!-- einde slider van de onderkant header -->   
</div>
