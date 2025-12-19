<?php

if ( is_front_page() && is_home() || is_home() ) {
    $title = 'Article'; // Blog posts index
} elseif ( is_page() || is_single() ) {
    $title = esc_html( get_the_title() );
} elseif ( is_category() || is_tag() || is_tax() ) {
    $title = esc_html( single_term_title( '', false ) );
} elseif ( is_archive() ) {
    $title = esc_html( get_the_archive_title() );
} elseif ( is_search() ) {
    $title = 'Search results for: ' . esc_html( get_search_query() );
} elseif ( is_404() ) {
    $title = 'Page Not Found';
} else {
    $title = esc_html( get_the_title() );
}

// Get csf options
$options = get_option( 'wp10ms_options' );

// Get global thumbnail
$global_thumb = esc_url( $options['breadcrumb-banner']['url'] );

// Get individual page thumbnail
$thumb_url = get_the_post_thumbnail_url();
$final_url = $thumb_url ? $thumb_url : $global_thumb;
$ind_thumb = 'background-image: url(' . esc_url( $final_url ) . ');';
// Only for blog page
$ind_thumb_post = 'background-image: url(' . esc_url( $global_thumb ) . ');';
$thumb = (is_front_page() && is_home() || is_home()) ? $ind_thumb_post : $ind_thumb;

?>
<section class="page-banner-wrap bg-cover" style="<?php echo $thumb ?>">
    <div class="banner-text"><?php echo esc_html( get_the_title() ); ?></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <div class="page-heading text-white">
                    <div class="page-title">
                        <h1><?php echo $title ?></h1>
                    </div>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( site_url() ); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>