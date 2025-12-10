<?php
// Create a Hero Section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Hero Section',
    'fields' => array(
        array(
            'id'    => 'v2-hero-slide-rep',
            'type'  => 'repeater',
            'title' => 'Hero Slider',
            'max'   => '10',
            'button_title' => 'Add Slider',
            'fields' => array(
                array(
                    'id'    => 'v2-hero-slide-banner',
                    'type'  => 'media',
                    'title' => 'Hero Slide Banner',
                ),
                array(
                    'id'    => 'v2-hero-slide-h1',
                    'type'  => 'text',
                    'title' => 'Hero Slide Title',
                ),
                array(
                    'id'    => 'v2-hero-slide-p',
                    'type'  => 'text',
                    'title' => 'Hero Slide Description',
                ),
                array(
                    'id'            => 'v2-hero-btn-rep',
                    'type'          => 'repeater',
                    'title'         => 'Hero Button',
                    'max'           => '2',
                    'button_title'  => 'Add Button',
                    'fields'        => array(
                        array(
                            'id'    => 'v2-hero-btn',
                            'type'  => 'link',
                            'title' => 'Hero Button Link',
                            'default' => esc_url( '#' ),
                        ),
                        array(
                            'id'    => 'v2-hero-btn-icon',
                            'type'  => 'icon',
                            'title' => 'Hero Button Icon',
                            'default' => 'icon-arrow-right-1',
                        ),
                    ),
                ),
            ),
        ),
    )
) );