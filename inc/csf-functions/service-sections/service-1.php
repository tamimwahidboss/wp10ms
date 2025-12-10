<?php
// Create a section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Service Section',
    'fields' => array(
        array(
            'id'    => 'v1-service-title-p',
            'type'  => 'text',
            'title' => 'Hero Title',
            'default' => 'Provide Best IT Services Your Business',
        ),
        array(
            'id'    => 'v1-service-title-h1',
            'type'  => 'text',
            'title' => 'Hero Title',
            'default' => 'Provide Best IT </br> Services For Your Business',
        ),
        array(
            'id'     => 'v1-service-box-rep',
            'type'   => 'repeater',
            'title'  => 'Service Boxes',
            'max'    => 4,
            'button_title' => 'Add Box',
            'fields' => array(
                array(
                    'id'    => 'v1-service-box-icon',
                    'type'  => 'media',
                    'title' => 'Box Icon',
                ),
                array(
                    'id'    => 'v1-service-box-title',
                    'type'  => 'text',
                    'title' => 'Box Title',
                    'default' => 'Provide Best IT Services',
                ),
                array(
                    'id'    => 'v1-service-box-p',
                    'type'  => 'text',
                    'title' => 'Box Description',
                    'default' => 'Provide Best IT Services For Your Business',
                ),
                array(
                    'id'    => 'v1-service-box-btn',
                    'type'  => 'link',
                    'title' => 'Button Link',
                ),
                array(
                    'id'    => 'v1-service-box-btn-icon',
                    'type'  => 'icon',
                    'title' => 'Button Icon',
                ),
            ),
        ),
    )
) );