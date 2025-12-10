<?php
// Create an about page section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Service Section',
    'fields' => array(
        array(
            'id'    => 'v2-service-p',
            'type'  => 'text',
            'title' => 'Service Short Title',
            'default' => 'Professional Consultants',
        ),
        array(
            'id'    => 'v2-service-h1',
            'type'  => 'text',
            'title' => 'Service Title',
        ),
        array(
            'id'     => 'v2-service-box-rep',
            'type'   => 'repeater',
            'title'  => 'List Item',
            'button_title' => 'Add Service',
            'max'    => 6,
            'fields' => array(
                array(
                    'id'    => 'v2-service-box-icon',
                    'type'  => 'media',
                    'title' => 'Add Service Icon',
                ),
                array(
                    'id'    => 'v2-service-box-h4',
                    'type'  => 'text',
                    'title' => 'Service Title',
                    'default' => 'Professional Consultants',
                ),
                array(
                    'id'    => 'v2-service-box-p',
                    'type'  => 'text',
                    'title' => 'Service Description',
                    'default' => 'Professional Consultants',
                ),
                array(
                    'id'    => 'v2-service-box-pop-link',
                    'type'  => 'link',
                    'title' => 'Service Link',
                ),
                array(
                    'id'    => 'v2-service-box-pop-p',
                    'type'  => 'text',
                    'title' => 'Service Popup Description',
                    'default' => 'Professional Consultants',
                ),
                array(
                    'id'    => 'v2-service-box-popupBtn-icon',
                    'type'  => 'icon',
                    'title' => 'Popup Button Icon',
                ),
            ),
        ),
    )
) );