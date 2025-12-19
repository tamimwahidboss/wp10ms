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


