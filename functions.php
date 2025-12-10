<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Implement the enqueue script.
 */
require get_template_directory() . '/inc/theme-support.php';

/**
 * Implement the enqueue script.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the register script.
 */
require get_template_directory() . '/inc/register.php';

/**
 * Implement the TGM required plugins.
 */
require get_template_directory() . '/inc/tgm/myactiveplugin.php';

/**
 * Implement the codestar framework script.
 */
require get_template_directory() . '/inc/csf-options.php';
// Implement the csf widgets script.
require get_template_directory() . '/inc/csf-widgets.php';
// Implement the csf metabox script.
require get_template_directory() . '/inc/csf-metabox.php';







// Start External Plugin Code Here:
// Add breadcrumb enable metabox
// function wp10ms_custom_meta_box() {
// 	add_meta_box( 'wp10ms_enable_breadcrumb_id', 'Enable Breadcrumb', 'wp10ms_enable_breadcrumb_callback', 'page', 'side', 'default' );
// }
// add_action( 'add_meta_boxes', 'wp10ms_custom_meta_box' );

// // A callback function for - wp10ms_enable_breadcrumb_id
// function wp10ms_enable_breadcrumb_callback( $post ) {
// 	echo '<select id="breadcrumb_control" name="breadcrumb_control">';
// 	echo '<option>Select</option>';
// 	echo '<option '. selected( '' ) .'>Enabled</option>';
// 	echo '<option>Disabled</option>';
// 	echo '</select>';
// }


