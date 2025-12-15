<?php
// Create a v3 Process Section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Process Section',
    'fields' => array(
        array(
            'id'    => 'v3-prosess-sec-h6',
            'type'  => 'text',
            'title' => 'Section Title',
            'default' => 'Our working process',
        ),
        array(
            'id'    => 'v3-prosess-sec-h2',
            'type'  => 'text',
            'title' => 'Main Title',
            'default' => 'We Follow 4 steps to Grow Business',
        ),
        array(
            'id'            => 'v3-prosess-repeater',
            'type'          => 'repeater',
            'title'         => 'Single Process',
            'max'           => '4',
            'button_title'  => 'Add More',
            'fields'        => array(
                array(
                    'id'    => 'v3-single-prosess-icon',
                    'type'  => 'media',
                    'title' => 'Add SVG Icon',
                ),
                array(
                    'id'    => 'v3-single-prosess-h4',
                    'type'  => 'text',
                    'title' => 'Process Title',
                    'default' => 'Data Analysis',
                ),
                array(
                    'id'    => 'v3-single-prosess-des',
                    'type'  => 'textarea',
                    'title' => 'Process Description',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
                ),
                array(
                    'id'    => 'v3-single-prosess-step',
                    'type'  => 'text',
                    'title' => 'Step Identifier',
                    'default' => 'Step-1',
                ),
                array(
                    'id'    => 'v3-single-prosess-mt',
                    'type'  => 'text',
                    'title' => 'Row Margin Top (e.g., mt-70 or mt-40)',
                    'default' => '',
                ),
            ),
        ),
    ),
) );