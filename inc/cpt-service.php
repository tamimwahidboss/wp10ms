<?php
/**
 * File: /inc/cpt-service.php
 * Service Custom Post Type Registration
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Services Custom Post Type
 */
function wp10ms_register_service_cpt() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'wp10ms' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'wp10ms' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'wp10ms' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'wp10ms' ),
        'add_new'               => __( 'Add New', 'wp10ms' ),
        'add_new_item'          => __( 'Add New Service', 'wp10ms' ),
        'edit_item'             => __( 'Edit Service', 'wp10ms' ),
        'new_item'              => __( 'New Service', 'wp10ms' ),
        'all_items'             => __( 'All Services', 'wp10ms' ),
        'view_item'             => __( 'View Service', 'wp10ms' ),
        'search_items'          => __( 'Search Services', 'wp10ms' ),
        'not_found'             => __( 'No services found', 'wp10ms' ),
        'not_found_in_trash'    => __( 'No services found in Trash', 'wp10ms' ),
        'featured_image'        => _x( 'Service Cover Image', 'Overrides the "Featured Image" phrase', 'wp10ms' ),
        'set_featured_image'    => _x( 'Set service cover image', 'Overrides the "Set featured image" phrase', 'wp10ms' ),
        'remove_featured_image' => _x( 'Remove service cover image', 'Overrides the "Remove featured image" phrase', 'wp10ms' ),
        'use_featured_image'    => _x( 'Use as service cover image', 'Overrides the "Use as featured image" phrase', 'wp10ms' ),
        'archives'              => _x( 'Service archives', 'The post type archive label', 'wp10ms' ),
        'insert_into_item'      => _x( 'Insert into service', 'Overrides the "Insert into post"/"Insert into page" phrase', 'wp10ms' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this service', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase', 'wp10ms' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 
            'slug'       => 'services',
            'with_front' => false,
        ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-admin-tools',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'taxonomies'         => array( 'service-category' ),
        'show_in_rest'       => true, // Enable Gutenberg editor
    );
    
    register_post_type( 'service', $args );
}
add_action( 'init', 'wp10ms_register_service_cpt' );

/**
 * Register Service Category Taxonomy
 */
function wp10ms_register_service_taxonomy() {
    $labels = array(
        'name'              => _x( 'Service Categories', 'taxonomy general name', 'wp10ms' ),
        'singular_name'     => _x( 'Service Category', 'taxonomy singular name', 'wp10ms' ),
        'search_items'      => __( 'Search Service Categories', 'wp10ms' ),
        'all_items'         => __( 'All Service Categories', 'wp10ms' ),
        'parent_item'       => __( 'Parent Service Category', 'wp10ms' ),
        'parent_item_colon' => __( 'Parent Service Category:', 'wp10ms' ),
        'edit_item'         => __( 'Edit Service Category', 'wp10ms' ),
        'update_item'       => __( 'Update Service Category', 'wp10ms' ),
        'add_new_item'      => __( 'Add New Service Category', 'wp10ms' ),
        'new_item_name'     => __( 'New Service Category Name', 'wp10ms' ),
        'menu_name'         => __( 'Service Categories', 'wp10ms' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 
            'slug'         => 'service-category',
            'with_front'   => false,
            'hierarchical' => true,
        ),
    );

    register_taxonomy( 'service-category', array( 'service' ), $args );
}
add_action( 'init', 'wp10ms_register_service_taxonomy' );

/**
 * Flush rewrite rules on theme activation
 */
function wp10ms_flush_rewrites() {
    wp10ms_register_service_cpt();
    wp10ms_register_service_taxonomy();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'wp10ms_flush_rewrites' );