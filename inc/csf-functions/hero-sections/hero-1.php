<?php
// Create a hero section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Hero Section',
    'fields' => array(

        // Hero Title
        array(
            'id'    => 'v1-hero-h2',
            'type'  => 'text',
            'title' => 'Hero Title',
            'default' => 'Solutions For',
        ),

        // Hero Main Title
        array(
            'id'    => 'v1-hero-h1',
            'type'  => 'text',
            'title' => 'Hero Main Title',
            'default' => 'IT Business',
        ),
        array(
            'id'    => 'v1-hero-p',
            'type'  => 'text',
            'title' => 'Hero Description',
            'default' => 'We Have 25 Years Of Experience In IT Solutions',
        ),

        // Hero Button Text
        array(
            'id'    => 'v1-hero-btn-rep',
            'type'  => 'repeater',
            'title' => 'Hero Button Text',
            'max'   => '2',
            'button_title' => 'Add Button',
            'fields' => array(
                array(
                    'id'    => 'v1-hero-btn-text',
                    'type'  => 'text',
                    'title' => 'Hero Button Text',
                    'default' => 'Service we provide ',
                ),
        
                // Hero Button link
                array(
                    'id'    => 'v1-hero-btn-link',
                    'type'  => 'link',
                    'title' => 'Hero Button Link',
                    'default' => '#',
                ),
        
                // Hero Button icon
                array(
                    'id'    => 'v1-hero-btn-icon',
                    'type'  => 'icon',
                    'title' => 'Hero Button Icon',
                    'default' => 'icon-arrow-right-1',
                ),
            ),
        ),

        // Hero Banner Images
        array(
            'id'    => 'v1-hero-banner1',
            'type'  => 'media',
            'title' => 'Hero Banner Image 1',
        ),
        array(
            'id'    => 'v1-hero-banner2',
            'type'  => 'media',
            'title' => 'Hero Banner Image 2',
        ),

    )
) );