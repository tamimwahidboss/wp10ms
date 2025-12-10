<?php
// Create a about page section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Service Section',
    'fields' => array(
        array(
            'id'    => 'v3-service-span',
            'type'  => 'text',
            'title' => 'Section Name',
            'default' => 'Professional Consultants',
        ),
        array(
            'id'    => 'v3-service-p',
            'type'  => 'text',
            'title' => 'Service Short Title',
            'default' => 'Professional Consultants',
        ),
        array(
            'id'    => 'v3-service-h1',
            'type'  => 'text',
            'title' => 'Service Title',
        ),
        array(
            'id'     => 'v3-service-box-rep',
            'type'   => 'repeater',
            'title'  => 'Service Item',
            'button_title' => 'Add Service',
            'max'    => 6,
            'fields' => array(
                array(
                    'id'    => 'v3-service-box-img',
                    'type'  => 'media',
                    'title' => 'Add Service Image',
                ),
                array(
                    'id'    => 'v3-service-box-icon',
                    'type'  => 'icon',
                    'title' => 'Service Icon',
                ),
                array(
                    'id'    => 'v3-service-box-link',
                    'type'  => 'link',
                    'title' => 'Service Title',
                ),
                array(
                    'id'    => 'v3-service-box-p',
                    'type'  => 'text',
                    'title' => 'Service Description',
                    'default' => 'Professional Consultants',
                ),
            ),
        ),
    )
) );