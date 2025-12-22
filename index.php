<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get post meta safely
$post_id = get_the_ID();

$breadcrumb_enabled = get_post_meta( $post_id, '_breadcrumb_control', true );
$sections            = get_post_meta( $post_id, '_page_sections', true );
$meta                = get_post_meta( $post_id, 'wp10ms_metabox', true );

// Header
get_header();

/**
 * ==============================
 * FRONT PAGE & STATIC PAGES
 * ==============================
 */
if ( is_front_page() || is_page() ) {

	if ( $breadcrumb_enabled === '1' ) {
		get_template_part( 'template-parts/global-elements/breadcrumb' );
	}

	// Metabox controlled sections
	if ( ! empty( $sections ) && is_array( $sections ) ) {
		foreach ( $sections as $sec ) {
			if ( ! empty( $sec['folder'] ) && ! empty( $sec['file'] ) ) {
				get_template_part(
					'template-parts/' . sanitize_file_name( $sec['folder'] ) . '/' .
					sanitize_file_name( str_replace( '.php', '', $sec['file'] ) )
				);
			}
		}
	}

	// Page content
	if ( trim( get_the_content() ) !== '' ) {
		get_template_part( 'template-parts/global-elements/content' );
	}

/**
 * ==============================
 * BLOG / ARCHIVE / SEARCH
 * ==============================
 */
} elseif ( is_home() || is_singular( 'post' ) || is_archive() || ( is_search() && ! is_singular( 'project' ) ) ) {

	get_template_part( 'template-parts/global-elements/breadcrumb' );

	echo '<section class="blog-wrapper news-wrapper section-padding">';
	echo '<div class="container"><div class="row">';

	echo '<div class="col-12 col-lg-8">';
	get_template_part( 'template-parts/global-elements/content' );
	echo '</div>';

	echo '<div class="col-12 col-lg-4">';
	echo '<div class="main-sidebar">';
	dynamic_sidebar( 'main-sidebar-1' );
	echo '</div></div>';

	echo '</div></div></section>';

/**
 * ==============================
 * PROJECT SINGLE
 * ==============================
 */
} elseif ( is_singular( 'project' ) ) {

	get_template_part( 'template-parts/global-elements/breadcrumb' );

	echo '<section class="case-study-post-wrapper section-padding">';
	echo '<div class="container">';
	get_template_part( 'template-parts/global-elements/content' );
	echo '</div></section>';
}

// Footer
get_footer();
