<?php
/**
 * File: /inc/conditional-assets.php
 * Conditional Asset Loading System
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Dequeue all non-critical assets globally
 * Then re-enqueue them conditionally
 */
function wp10ms_conditional_assets() {
    
    // Dequeue scripts that were enqueued in enqueue.php
    wp_dequeue_script( 'scrollUp' );
    wp_dequeue_script( 'owl-carousel' );
    wp_dequeue_script( 'aos' );
    
    // Dequeue styles that aren't needed everywhere
    wp_dequeue_style( 'owl-carousel' );
    wp_dequeue_style( 'owl-theme' );
    wp_dequeue_style( 'metismenu' );
    
    // ===================================
    // CONDITIONAL LOADING LOGIC
    // ===================================
    
    // Load carousel assets only on pages that use them
    $carousel_pages = array(
        'home',           // Front page
        'about',          // About page slug
        'testimonials',   // Testimonials page
    );
    
    if ( is_front_page() || is_page( $carousel_pages ) || has_shortcode( get_post_field( 'post_content', get_the_ID() ), 'owl_carousel' ) || wp10ms_page_uses_carousel() ) {
        wp_enqueue_style( 'owl-carousel' );
        wp_enqueue_style( 'owl-theme' );
        wp_enqueue_script( 'owl-carousel' );
        
        // Add async attribute to owl carousel
        wp_script_add_data( 'owl-carousel', 'async', true );
    }
    
    // Load AOS (Animate On Scroll) only on specific templates
    if ( is_front_page() || is_page_template( 'template-landing.php' ) || is_singular( 'service' ) || is_singular( 'project' ) ) {
        wp_enqueue_style( 'aos' );
        wp_enqueue_script( 'aos' );
        wp_script_add_data( 'aos', 'defer', true );
    }
    
    // Load metismenu only on pages with mobile menu
    if ( ! is_404() ) {
        wp_enqueue_style( 'metismenu' );
    }
    
    // Load scrollUp on all pages except 404
    if ( ! is_404() ) {
        wp_enqueue_script( 'scrollUp' );
        wp_script_add_data( 'scrollUp', 'defer', true );
    }
    
    // Load specific assets for blog/archive pages
    if ( is_home() || is_archive() || is_singular( 'post' ) ) {
        // Add blog-specific scripts here if needed
    }
    
    // Load project-specific assets
    if ( is_singular( 'project' ) || is_post_type_archive( 'project' ) ) {
        // Isotope for filtering (currently commented out in enqueue.php)
        // wp_enqueue_script( 'isotope' );
        // wp_enqueue_script( 'imageload' );
    }
    
    // Load service-specific assets
    // if ( is_singular( 'service' ) || is_post_type_archive( 'service' ) ) {
    //     // Service-specific scripts
    //     wp_enqueue_style( 'service-single', get_template_directory_uri() . '/assets/css/service-single.css', array(), _S_VERSION );
    // }
    
    // Contact form assets - only on contact pages
    if ( is_page( 'contact' ) || is_page_template( 'template-contact.php' ) ) {
        // wp_enqueue_script( 'ajax-mail' );
    }
}
add_action( 'wp_enqueue_scripts', 'wp10ms_conditional_assets', 20 ); // Priority 20 to run after main enqueue

/**
 * Helper function to check if page uses carousel sections
 * Checks the page sections meta for carousel-related sections
 */
function wp10ms_page_uses_carousel() {
    $post_id = get_the_ID();
    if ( ! $post_id ) {
        return false;
    }
    
    $sections = get_post_meta( $post_id, '_page_sections', true );
    
    if ( empty( $sections ) || ! is_array( $sections ) ) {
        return false;
    }
    
    $carousel_sections = array(
        'testimonial-1.php',
        'testimonial-2.php',
        'testimonial-3.php',
        'testimonial-4.php',
        'brand-1.php',
        'brand-2.php',
        'team-1.php',
        'team-2.php',
        'project-1.php',
        'blog-1.php',
    );
    
    foreach ( $sections as $section ) {
        if ( isset( $section['file'] ) && in_array( $section['file'], $carousel_sections ) ) {
            return true;
        }
    }
    
    return false;
}

/**
 * Add async/defer attributes to scripts
 * More granular control than wp_script_add_data
 */
function wp10ms_add_async_defer_attributes( $tag, $handle, $src ) {
    
    // Scripts to defer
    $defer_scripts = array(
        'aos',
        'scrollUp',
        'active', // Main activation script should be deferred
    );
    
    // Scripts to async
    $async_scripts = array(
        'owl-carousel',
    );
    
    if ( in_array( $handle, $defer_scripts ) ) {
        return str_replace( ' src', ' defer src', $tag );
    }
    
    if ( in_array( $handle, $async_scripts ) ) {
        return str_replace( ' src', ' async src', $tag );
    }
    
    return $tag;
}
add_filter( 'script_loader_tag', 'wp10ms_add_async_defer_attributes', 10, 3 );

/**
 * Remove jQuery Migrate for performance
 * Only do this if you're sure your theme doesn't need it
 */
function wp10ms_remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];
        
        if ( $script->deps ) {
            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
}
add_action( 'wp_default_scripts', 'wp10ms_remove_jquery_migrate' );

/**
 * Preload critical assets
 */
function wp10ms_preload_critical_assets() {
    // Preload critical CSS
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/assets/css/bootstrap.min.css" as="style">';
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/assets/css/style.css" as="style">';
    
    // Preload fonts
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/assets/fonts/CircularStd-Medium.woff2" as="font" type="font/woff2" crossorigin>';
}
add_action( 'wp_head', 'wp10ms_preload_critical_assets', 1 );
