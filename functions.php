<?php
/**
 * WordPress10MS Theme Functions
 * Optimized for Performance and Clean Architecture
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( '_S_VERSION' ) ) {
    define( '_S_VERSION', '3.0.1' );
}

/**
 * Defer non-critical CSS for performance 
 */
function add_defer_to_style_tag( $html, $handle ) {
    $styles_to_defer = array( 
        'icons', 
        'animate', 
        'owl-carousel', 
        'owl-theme', 
        'aos'
    );

    if ( in_array( $handle, $styles_to_defer ) ) {
        $html = str_replace( "rel='stylesheet'", "rel='preload' as='style'", $html );
        $html = str_replace( "href=", "onload=\"this.onload=null;this.rel='stylesheet'\" href=", $html );
        $html .= '<noscript>' . str_replace( "rel='preload' as='style'", "rel='stylesheet'", $html ) . '</noscript>';
    }
    return $html;
}
add_filter( 'style_loader_tag', 'add_defer_to_style_tag', 10, 2 );

/**
 * Theme Support
 */
require get_template_directory() . '/inc/theme-support.php';

/**
 * Enqueue Scripts & Styles
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Conditional Asset Loading (Performance Optimization)
 */
// require get_template_directory() . '/inc/conditional-assets.php';

/**
 * Register Widgets & Custom Post Types
 */
require get_template_directory() . '/inc/register.php';

/**
 * Service CPT Registration
 */
require get_template_directory() . '/inc/cpt-service.php';

/**
 * TGM Required Plugins
 */
require get_template_directory() . '/inc/tgm/myactiveplugin.php';

/**
 * Codestar Framework Options
 */
require get_template_directory() . '/inc/csf-options.php';

/**
 * Codestar Framework Widgets
 */
require get_template_directory() . '/inc/csf-widgets.php';

/**
 * Codestar Framework Metaboxes
 */
require get_template_directory() . '/inc/csf-metabox.php';

/**
 * Author Social Media Fields
 */
require get_template_directory() . '/inc/author-social-fields.php';