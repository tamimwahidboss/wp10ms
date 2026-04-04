<?php
/*
 * Plugin Name:         WP10MS Supports
 * Description:         This is support plugin for WP10MS Theme powered by WordPress10ms Company. It's plugin enable all of the CPT & CMB functionalitites to required for using WP10MS Theme.
 * Version:             1.0
 * Requires at least:   5.2
 * Requires PHP:        7.2
 * Author:              tamimwahid
 * Text Domain:         wp10ms-supports
 */

/**
 * Custom Post Type | Custom Meta Boxes
 * Link: https://www.youtube.com/watch?v=DEpxb0jobjY&list=PLT9miexWCpPVvnZwVw5uA0ZwCOCBaf0Xn
 */

// This is wp10ms custom post type file
include('includes/wp10ms-cpt.php');
// This is wp10ms custom meta box file
include('includes/wp10ms-cmb.php');
include('includes/section-control.php');


// add_action( 'wp_footer', 'custom_footer_text' );
// function custom_footer_text() {
//     echo 'Custom Footer Text'; 
// }





// This is test custom post type file
// include('inc/wp-owt-cpt.php');
// This is test custom meta box file
// include('inc/wp-owt-cmb.php');


// work with array: $echo['0']
// Array
// (
//     [0] => Hello World!
// )


// work with object: $echo->ID;
// WP_Post Object
// (
//     [ID] => 2712
// )