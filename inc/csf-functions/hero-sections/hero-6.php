<?php
// Create a hero section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Hero Section',
    'fields' => array(

        // Hero Title
        array(
            'id'      => 'v6-hero-h2',
            'type'    => 'text',
            'title'   => 'Hero Title',
            'default' => 'Provide Best IT <br> Services For Your <br> Business',
        ),

        // Hero Button Text
        array(
            'id'      => 'v6-hero-btn-text',
            'type'    => 'text',
            'title'   => 'Hero Button Text',
            'default' => 'Discover More',
        ),

        // Hero Button link
        array(
            'id'      => 'v6-hero-btn-link',
            'type'    => 'link',
            'title'   => 'Hero Button Link',
            'default' => '#',
        ),

        // Hero Button icon
        array(
            'id'      => 'v6-hero-btn-icon',
            'type'    => 'icon',
            'title'   => 'Hero Button Icon',
            'default' => 'icon-arrow-right-1',
        ),

        // Hero banner
        array(
            'id'      => 'v6-hero-banner',
            'type'    => 'media',
            'title'   => 'Hero Banner',
        ),

    )
) );