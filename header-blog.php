<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/assets/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo( 'template_url' ); ?>/assets/safari-pinned-tab.svg" color="#5bbad5">

	<!-- Google Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light|Oswald:400,300,700" rel="stylesheet prefetch" type="text/css">
    
    <!-- JavaScripts -->
    <!-- <script type="text/javascript" src="js/prefixfree.min.js"></script>
    <script type="text/javascript" src="js/modernizr-2.6.2.js"></script>
    <script type="text/javascript" src="js/iOS-timer.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.mobile-touch-swipe-1.0.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/tooltip.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script> -->

  <?php wp_head(); ?>
	<script type="text/javascript">

			var isMobile = false;
	
			if( navigator.userAgent.match(/Android/i) || 
				navigator.userAgent.match(/webOS/i) ||
				navigator.userAgent.match(/iPhone/i) || 
				navigator.userAgent.match(/iPad/i)|| 
				navigator.userAgent.match(/iPod/i) || 
				navigator.userAgent.match(/BlackBerry/i)){
								
				isMobile = true;
							
			}
			
			/*iOS5 fixed-menu fix*/
			var iOS5 = false;
			
			if (navigator.userAgent.match(/OS 5(_\d)+ like Mac OS X/i)){
			
				iOS5 = true;
			
			}
			
	</script>

    
	<script>
		$(document).ready(function(){
			$("nav").sticky({topSpacing:0});
		});
	</script>



</head>

<body ontouchstart="">



<!-- Start Navigation -->
<nav>
    <div class="flex-container">
      <div class="dropnav__hamburger"></div>

      <!-- Nav Menu -->
      <?php wp_nav_menu( array(
        'theme_location'    => 'secondary',
        'container'         => false,
      ) ); ?>

      <!-- Dropmenu for mobile -->
      <div class="dropnav is-hidden">

        <?php wp_nav_menu( array(
          'theme_location'    => 'secondary',
          'container'         => false,
          'menu_class'        => 'menu-mobile',
        ) ); ?>
        
      </div>
      
      <ul class="lang-switcher"><?php pll_the_languages();?></ul>
      
    </div>

  </nav>
<!-- End Navigation --> 