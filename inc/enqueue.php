<?php


// Enqueue scripts and styles.
function wp10ms_enqueue_filse() {
    wp_enqueue_style( 'default', get_stylesheet_uri(), array(), '1.0.0' );
    // Icon css plugins
    wp_enqueue_style( 'icons', get_template_directory_uri().'/assets/css/icons.css', array(), '5.8.1', 'all' );
    // animate css plugins
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css', array(), '3.7.0', 'all' );
    // magnific-popup css plugins
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    // owl carosuel css plugins
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '2.2.1', 'all' );
    // metis menu css file
    wp_enqueue_style( 'metismenu', get_template_directory_uri().'/assets/css/metismenu.css', array(), '2.7.2', 'all' );
    // owl theme css plugins
    wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/assets/css/owl.theme.css', array(), '2.2.1', 'all' );
    // Bootstrap css plugins
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '4.3.1', 'all' );
    // aos css plugins
    wp_enqueue_style( 'aos', get_template_directory_uri().'/assets/css/aos.min.css', array(), '3.0.0', 'all' );
    // Font Awesome
    // wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    // wp_enqueue_style( 'fa5-v4-shims', 'https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css', array(), '5.13.0', 'all' );
    // main style css file
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0' );

    // Script
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'imageload', get_template_directory_uri() . '/assets/js/imageload.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'scrollUp', get_template_directory_uri() . '/assets/js/scrollUp.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'easypiechart', get_template_directory_uri() . '/assets/js/easypiechart.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'metismenu', get_template_directory_uri() . '/assets/js/metismenu.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'timeline', get_template_directory_uri() . '/assets/js/timeline.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'ajax-mail', get_template_directory_uri() . '/assets/js/ajax-mail.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'active', get_template_directory_uri() . '/assets/js/active.js', array(), _S_VERSION, true );


}
add_action( 'wp_enqueue_scripts', 'wp10ms_enqueue_filse' );