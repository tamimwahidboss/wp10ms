<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'body-wrapper' ); ?>>
    <?php
    wp_body_open(  );
    // Retrieve the csf saved option value
    $options = get_option('wp10ms_options');
    get_template_part('template-parts/global-elements/preloader');

    if ( isset( $options['header-select'] ) && $options['header-select'] === 'header-1' ) {
        // This is header v1 here
        get_template_part('template-parts/header-sections/header-1');

    } elseif ( isset( $options['header-select'] ) && $options['header-select'] === 'header-2' ) {
        // This is header v5 here
        get_template_part('template-parts/header-sections/header-2');

    } elseif ( isset( $options['header-select'] ) && $options['header-select'] === 'header-3' ) {
        // This is header v5 here
        get_template_part('template-parts/header-sections/header-3');

    } elseif ( isset( $options['header-select'] ) && $options['header-select'] === 'header-4' ) {
        // This is header v5 here
        get_template_part('template-parts/header-sections/header-4');
    } 
    

    ?>
    
    