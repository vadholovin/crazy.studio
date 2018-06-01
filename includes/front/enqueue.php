<?php

// Enqueue styles & scripts
function vh_enqueue() {
  // Styles
  wp_register_style( 'vh_skeleton', get_template_directory_uri() . '/assets/css/skeleton.css' );
  wp_register_style( 'vh_main', get_template_directory_uri() . '/assets/css/main.css' );
  wp_register_style( 'vh_prettyphoto', get_template_directory_uri() . '/assets/css/prettyPhoto.css' );
  wp_register_style( 'vh_youtube', get_template_directory_uri() . '/assets/css/YTPlayer.css' );

  wp_enqueue_style( 'vh_skeleton' );
  wp_enqueue_style( 'vh_main' );
  wp_enqueue_style( 'vh_prettyphoto' );
  wp_enqueue_style( 'vh_youtube' );


  // Scripts
  if ( !is_admin() ) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.3.min.js', array(), null, false );
    wp_enqueue_script('jquery');
  }
  wp_register_script( 'vh_modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.js', array(), null, false );
  wp_register_script( 'vh_ios_timer', get_template_directory_uri() . '/assets/js/iOS-timer.js', array(), null, false );
  wp_register_script( 'vh_youtube', get_template_directory_uri() . '/assets/js/jquery.mb.YTPlayer.js', array( 'jquery' ), null, false );
  wp_register_script( 'vh_sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array( 'jquery' ), null, false );
  wp_register_script( 'vh_prettyphoto', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js', array( 'jquery' ), null, true );
  wp_register_script( 'vh_isotope', get_template_directory_uri() . '/assets/js/jquery.isotope.min.js', array( 'jquery' ), null, true );
  wp_register_script( 'vh_isotope_run', get_template_directory_uri() . '/assets/js/jquery.isotope.run.js', array( 'jquery' ), null, true );
  wp_register_script( 'vh_easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array( 'jquery' ), null, true );
  wp_register_script( 'vh_mobile_touch', get_template_directory_uri() . '/assets/js/jquery.mobile-touch-swipe-1.0.js', array( 'jquery' ), null, true );
  wp_register_script( 'vh_flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array( 'jquery' ), null, true );
  wp_register_script( 'vh_parallax', get_template_directory_uri() . '/assets/js/jquery.parallax-1.1.3.js', array( 'jquery' ), null, true );
  // wp_register_script( 'vh_contact_form', get_template_directory_uri() . '/assets/js/contact_form.js', array( 'jquery' ), null, true );
  wp_register_script( 'vh_tooltip', get_template_directory_uri() . '/assets/js/tooltip.js', array( 'jquery' ), null, true );
  wp_register_script( 'vh_retina', get_template_directory_uri() . '/assets/js/retina.js', array(), null, true );
  wp_register_script( 'vh_main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), null, true );

  wp_enqueue_script( 'vh_modernizr' );
  wp_enqueue_script( 'vh_ios_timer' );
  wp_enqueue_script( 'vh_youtube' );
  wp_enqueue_script( 'vh_prettyphoto' );
  wp_enqueue_script( 'vh_isotope' );
  wp_enqueue_script( 'vh_isotope_run' );
  wp_enqueue_script( 'vh_easing' );
  wp_enqueue_script( 'vh_mobile_touch' );
  wp_enqueue_script( 'vh_flexslider' );
  wp_enqueue_script( 'vh_parallax' );
  // wp_enqueue_script( 'vh_contact_form' );
  wp_enqueue_script( 'vh_tooltip' );
  wp_enqueue_script( 'vh_retina' );
  wp_enqueue_script( 'vh_sticky' );
  wp_enqueue_script( 'vh_main' );
}

// Styles & scripts for Briefs
function vh_enqueue_briefs() {
  if ( is_page( array('brief-identity', 'brief-lp', 'brief-logo', 'brief-multipage', 'brief-polygraphy', 'brief-shop' ) ) ) {
    // Enqueue styles & scripts
    wp_register_style( 'vh_brief_fonts', get_template_directory_uri() . '/assets/briefs/fonts/fonts.css');
    wp_register_style( 'vh_brief_style', get_template_directory_uri() . '/assets/briefs/css/style.css');

    wp_enqueue_style( 'vh_brief_fonts' );
    wp_enqueue_style( 'vh_brief_style' );

    wp_register_script( 'vh_pagescroll', get_template_directory_uri() . '/assets/briefs/js/vendor/PageScroll2id.min.js', array( 'jquery' ), null, true );
    wp_register_script( 'vh_rangeslider', get_template_directory_uri() . '/assets/briefs/js/vendor/rangeslider.min.js', array( 'jquery' ), null, true );
    wp_register_script( 'vh_brief_common', get_template_directory_uri() . '/assets/briefs/js/common.js', array( 'jquery' ), null, true );
    wp_register_script( 'vh_brief_mail', get_template_directory_uri() . '/assets/briefs/js/mail.js', array( 'jquery' ), null, true );

    wp_enqueue_script( 'vh_pagescroll' );
    wp_enqueue_script( 'vh_rangeslider' );
    wp_enqueue_script( 'vh_brief_common' );
    wp_enqueue_script( 'vh_brief_mail' );

    // Dequeue styles & scripts
    wp_dequeue_style( 'vh_skeleton' );
    wp_dequeue_style( 'vh_main' );
    wp_dequeue_style( 'vh_prettyphoto' );
    wp_dequeue_style( 'vh_youtube' );

    wp_dequeue_script( 'vh_modernizr' );
    wp_dequeue_script( 'vh_ios_timer' );
    wp_dequeue_script( 'vh_youtube' );
    wp_dequeue_script( 'vh_prettyphoto' );
    wp_dequeue_script( 'vh_isotope' );
    wp_dequeue_script( 'vh_isotope_run' );
    wp_dequeue_script( 'vh_easing' );
    wp_dequeue_script( 'vh_mobile_touch' );
    wp_dequeue_script( 'vh_flexslider' );
    wp_dequeue_script( 'vh_parallax' );
    wp_dequeue_script( 'vh_tooltip' );
    wp_dequeue_script( 'vh_retina' );
    wp_dequeue_script( 'vh_sticky' );
    wp_dequeue_script( 'vh_main' );
  }
}