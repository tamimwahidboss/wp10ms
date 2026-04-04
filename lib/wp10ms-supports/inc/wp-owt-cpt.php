<?php
/**
 * Here describe about custom post type CPT and write some examples.
 * It is recommended to register the taxonomy first, and then the post type to which that taxonomy is linked!
 */

// Register Custom Taxonomy for "Publisher"
function wpl_owt_custom_book_taxonomy() {

    // Labels shown in the admin area
    $tax_labels = array(
        'name'              => _x( 'Publishers', 'taxonomy general name', 'wp10ms' ), // Plural name
        'singular_name'     => _x( 'Publisher', 'taxonomy singular name', 'wp10ms' ), // Singular name
        'search_items'      => __( 'Search Publishers', 'wp10ms' ),
        'all_items'         => __( 'All Publishers', 'wp10ms' ),
        'parent_item'       => __( 'Parent Publisher', 'wp10ms' ),
        'parent_item_colon' => __( 'Parent Publisher:', 'wp10ms' ),
        'edit_item'         => __( 'Edit Publisher', 'wp10ms' ),
        'update_item'       => __( 'Update Publisher', 'wp10ms' ),
        'add_new_item'      => __( 'Add New Publisher', 'wp10ms' ),
        'new_item_name'     => __( 'New Publisher Name', 'wp10ms' ),
        'menu_name'         => __( 'Publisher', 'wp10ms' ),
    );

    // Arguments to define taxonomy behavior
    $tax_args = array(
        'labels'            => $tax_labels, // The labels array above
        'hierarchical'      => true, // true = like category, false = like tag
        'public'            => true, // Show on frontend
        'show_ui'           => true, // Show in admin
        'show_admin_column' => true, // Add column in post list
        'show_in_nav_menus' => true, // Can be used in menus
        'show_tagcloud'     => false, // Hide tag cloud widget
        'show_in_rest'      => true, // Enable REST & Gutenberg
        'rewrite'           => array( 'slug' => 'publisher' ), // Custom URL slug
        'query_var'         => true, // Enable query with ?publisher=name
    );

    // Finally register the taxonomy to 'books' post type
    register_taxonomy( 'publisher', array( 'books' ), $tax_args );

    /**
     * Register Custom Post Type for "Books"
     * Labels shown in the admin area for this CPT
     */
    $cpt_labels = array(
        'name'                  => _x( 'Books', 'Post Type General Name', 'wp10ms' ), // Main plural name
        'singular_name'         => _x( 'Book', 'Post Type Singular Name', 'wp10ms' ), // Single item name
        'menu_name'             => __( 'Books', 'wp10ms' ), // Menu text
        'name_admin_bar'        => __( 'Book', 'wp10ms' ), // Toolbar label
        'archives'              => __( 'Book Archives', 'wp10ms' ),
        'attributes'            => __( 'Book Attributes', 'wp10ms' ),
        'parent_item_colon'     => __( 'Parent Book:', 'wp10ms' ),
        'all_items'             => __( 'All Books', 'wp10ms' ),
        'add_new_item'          => __( 'Add New Book', 'wp10ms' ),
        'add_new'               => __( 'Add New', 'wp10ms' ),
        'new_item'              => __( 'New Book', 'wp10ms' ),
        'edit_item'             => __( 'Edit Book', 'wp10ms' ),
        'update_item'           => __( 'Update Book', 'wp10ms' ),
        'view_item'             => __( 'View Book', 'wp10ms' ),
        'view_items'            => __( 'View Books', 'wp10ms' ),
        'search_items'          => __( 'Search Book', 'wp10ms' ),
        'not_found'             => __( 'Not found', 'wp10ms' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'wp10ms' ),
        'featured_image'        => __( 'Featured Image', 'wp10ms' ),
        'set_featured_image'    => __( 'Set featured image', 'wp10ms' ),
        'remove_featured_image' => __( 'Remove featured image', 'wp10ms' ),
        'use_featured_image'    => __( 'Use as featured image', 'wp10ms' ),
        'insert_into_item'      => __( 'Insert into book', 'wp10ms' ),
        'uploaded_to_this_item' => __( 'Uploaded to this book', 'wp10ms' ),
        'items_list'            => __( 'Books list', 'wp10ms' ),
        'items_list_navigation' => __( 'Books list navigation', 'wp10ms' ),
        'filter_items_list'     => __( 'Filter books list', 'wp10ms' ),
    );

    // Arguments to define the behavior of the CPT
    $cpt_args = array(
        'label'                 => __( 'Book', 'wp10ms' ), // Singular label
        'description'           => __( 'A custom post type for books', 'wp10ms' ), // CPT description
        'labels'                => $cpt_labels, // The labels array above
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'trackbacks', 'page-attributes', 'post-formats', ),  // Features enabled in editor
        'taxonomies'            => array( 'category', 'post_tag', 'publisher' ), // Built-in and custom taxonomies
        'hierarchical'          => false, // false = like posts, true = like pages
        'public'                => true, // Visible to public
        'show_ui'               => true, // Show in WP admin
        'show_in_menu'          => true, // Show in main menu
        'menu_position'         => 5, // Position in admin menu
        'menu_icon'             => 'dashicons-book-alt', // Admin icon
        'show_in_admin_bar'     => true, // Show in top admin bar
        'show_in_nav_menus'     => true, // Can be used in menus
        'can_export'            => true, // Can be exported via tools
        'has_archive'           => true, // Enable archive page
        'exclude_from_search'   => false, // Included in search
        'publicly_queryable'    => true, // Can query via frontend
        'show_in_rest'          => true, // Enable Gutenberg and REST API
        'capability_type'       => 'post', // Use default post capabilities
        'rewrite'               => array( 'slug' => 'book' ), // Custom URL slug
        'query_var'             => true, // Allow query with ?books=name
    );

    // Register Custom Post Type
    register_post_type( 'book', $cpt_args );
}
add_action( 'init', 'wpl_owt_custom_book_taxonomy' );

