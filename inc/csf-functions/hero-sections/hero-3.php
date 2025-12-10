<?php
// Create a hero section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Hero Section',
    'fields' => array(
        array(
            'id'    => 'v3-hero-banner',
            'type'  => 'media',
            'title' => 'Hero Banner',
        ),
        array(
            'id'    => 'v3-hero-p',
            'type'  => 'text',
            'title' => 'Top Text',
        ),
        array(
            'id'    => 'v3-hero-h1',
            'type'  => 'text',
            'title' => 'Main Title',
        ),
        array(
            'id'    => 'v3-hero-btn-rep',
            'type'  => 'repeater',
            'title' => 'Hero Button',
            'max'   => '2',
            'button_title' => 'Add Button',
            'fields' => array(
                array(
                    'id'    => 'v3-hero-btn',
                    'type'  => 'link',
                    'title' => 'Button link',
                    'default' => '#',
                ),
                array(
                    'id'    => 'v3-hero-btn-icon',
                    'type'  => 'icon',
                    'title' => 'Button icon',
                    'default' => 'icon-arrow-right-1',
                ),
            ),
        ),
    )
) );