<?php
// Create a Process Section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Process Section',
    'fields' => array(
        array(
            'id'    => 'v2-process-p',
            'type'  => 'text',
            'title' => 'Add Short Title',
            'default' => 'Our working process',
        ),
        array(
            'id'    => 'v2-process-h1',
            'type'  => 'text',
            'title' => 'Add Title',
            'default' => 'We Follow 4 steps to Grow Business',
        ),
        array(
            'id'            => 'v2-process-repeater',
            'type'          => 'repeater',
            'title'         => 'Add Single Process',
            'max'           => 3,
            'button_title'  => 'Add More',
            'fields'        => array(
                array(
                    'id'    => 'v2-process-box-icon',
                    'type'  => 'icon',
                    'title' => 'Add Box Icon',
                    'default' => 'fal fa-mug-hot',
                ),
                array(
                    'id'    => 'v1-single-prosess-h3',
                    'type'  => 'text',
                    'title' => 'Add Single Process Title',
                    'default' => 'Data Analysis',
                ),
                array(
                    'id'    => 'v1-single-prosess-p',
                    'type'  => 'textarea',
                    'title' => 'Add Single Process Description',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
                ),
            ),
        ),
    ),
) );