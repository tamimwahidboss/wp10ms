<?php
// Create a Hero Section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Hero Section',
    'fields' => array(
        array(
            'id'    => 'v5-hero-slide-rep',
            'type'  => 'repeater',
            'title' => 'Hero Slider',
            'max'   => '10',
            'button_title' => 'Add Slider',
            'fields' => array(
                array(
                    'id'    => 'v5-hero-banner',
                    'type'  => 'media',
                    'title' => 'Hero Banner',
                ),
                array(
                    'id'    => 'v5-hero-a',
                    'type'  => 'text',
                    'title' => 'Top Text',
                ),
                array(
                    'id'    => 'v5-hero-h1',
                    'type'  => 'text',
                    'title' => 'Main Title',
                ),
                array(
                    'id'    => 'v5-hero-p',
                    'type'  => 'text',
                    'title' => 'Description',
                ),
                array(
                    'id'            => 'v5-hero-btn-rep',
                    'type'          => 'repeater',
                    'title'         => 'Hero Button',
                    'max'           => '2',
                    'button_title'  => 'Add Button',
                    'fields'        => array(
                        array(
                            'id'    => 'v5-hero-btn',
                            'type'  => 'link',
                            'title' => 'Button Link',
                            'default' => esc_url( '#' ),
                        ),
                        array(
                            'id'    => 'v5-hero-btn-icon',
                            'type'  => 'icon',
                            'title' => 'Button Icon',
                            'default' => 'icon-arrow-right-1',
                        ),
                    ),
                ),
            ),
        ),
    )
) );