<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Service Section',
    'fields' => array(
        array(
            'id'    => 'v7-secvice-sec-h6',
            'type'  => 'text',
            'title' => 'Section Subtitle',
            'default' => 'Our Services',
        ),
        array(
            'id'    => 'v7-secvice-sec-h2',
            'type'  => 'text',
            'title' => 'Section Title',
            'default' => 'Our Proposition Data Science and Analytics Services',
        ),
        array(
            'id'            => 'v7-service-repeater',
            'type'          => 'repeater',
            'title'         => 'Single Service',
            'button_title'  => 'Add More',
            'max'           => 3,
            'fields'        => array(
                array(
                    'id'    => 'v7-single-service-icon',
                    'type'  => 'media',
                    'title' => 'Service Icon',
                ),
                array(
                    'id'    => 'v7-single-service-h4',
                    'type'  => 'text',
                    'title' => 'Service Title',
                    'default' => 'Product Engineering',
                ),
                array(
                    'id'    => 'v7-single-service-des',
                    'type'  => 'textarea',
                    'title' => 'Service Description',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ),
                array(
                    'id'    => 'v7-single-service-btn-text',
                    'type'  => 'text',
                    'title' => 'Button Title',
                    'default' => 'Read More',
                ),
                array(
                    'id'    => 'v7-single-service-btn-link',
                    'type'  => 'link',
                    'title' => 'Button Link',
                    'default' => esc_url( '#' ),
                ),
                array(
                    'id'    => 'v7-single-service-btn-icon',
                    'type'  => 'icon',
                    'title' => 'Button Icon',
                    'default' => 'far fa-long-arrow-right',
                ),
            ),
        ),
    ),
));