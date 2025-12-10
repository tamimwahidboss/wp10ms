<?php
// Create a hero section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Hero Section',
    'fields' => array(
        array(
            'id'    => 'v4-hero-span',
            'type'  => 'text',
            'title' => 'Top Text',
        ),
        array(
            'id'    => 'v4-hero-h1',
            'type'  => 'text',
            'title' => 'Main Title',
        ),
        array(
            'id'    => 'v4-hero-p',
            'type'  => 'text',
            'title' => 'Description',
        ),
        array(
            'id'    => 'v4-hero-btn-rep',
            'type'  => 'repeater',
            'title' => 'Hero Button',
            'max'   => 2,
            'button_title' => 'Add Button',
            'fields' => array(
                array(
                    'id'    => 'v4-hero-btn',
                    'type'  => 'link',
                    'title' => 'Button link',
                    'default' => '#',
                ),
                array(
                    'id'    => 'v4-hero-btn-icon',
                    'type'  => 'icon',
                    'title' => 'Button icon',
                    'default' => 'icon-arrow-right-1',
                ),
            ),
        ),
        array(
            'id'    => 'v4-hero-banner',
            'type'  => 'media',
            'title' => 'Hero Banner',
        ),
    )
) );