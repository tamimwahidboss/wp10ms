<?php
// Create a section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Feature Section',
    'fields' => array(
        array(
            'id'    => 'v1-feature-title-p',
            'type'  => 'text',
            'title' => 'Hero Title',
            'default' => 'Provide Best IT Services Your Business',
        ),
        array(
            'id'    => 'v1-feature-title-h1',
            'type'  => 'text',
            'title' => 'Hero Title',
            'default' => 'Provide Best IT Services For Your Business',
        ),
        array(
            'id'    => 'v1-feature-banner',
            'type'  => 'media',
            'title' => 'Feature Banner',
        ),
        array(
            'id'    => 'v1-feature-box-rep',
            'type'  => 'repeater',
            'button_title' => 'Add Box',
            'max' => '4',
            'fields' => array(
                array(
                    'id'    => 'v1-feature-box-icon',
                    'type'  => 'icon',
                    'title' => 'Title',
                    'default' => 'flaticon-speech-bubble',
                ),
                array(
                    'id'    => 'v1-feature-box-h3',
                    'type'  => 'text',
                    'title' => 'Title',
                    'default' => 'Provide Best IT',
                ),
                array(
                    'id'    => 'v1-feature-box-p',
                    'type'  => 'text',
                    'title' => 'Title',
                    'default' => 'Provide Best IT Services',
                ),
            ),
        ),
        array(
            'id'    => 'v1-feature-cta-p',
            'type'  => 'textarea',
            'title' => 'Title',
            'default' => 'Provide Best IT Services For Your Business',
        ),
    )
) );