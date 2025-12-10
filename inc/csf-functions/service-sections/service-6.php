<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Service Section',
    'fields' => array(
        array(
            'id'    => 'v6-service-title-span',
            'type'  => 'text',
            'title' => 'Service Button Text',
            'default' => 'What We Do',
        ),
        array(
            'id'    => 'v6-service-h1',
            'type'  => 'text',
            'title' => 'Main Service Title',
            'default' => 'We Provide Best Solutions For IT Business',
        ),
        array(
            'id'            => 'v6-service-box-rep',
            'type'          => 'repeater',
            'title'         => 'Service Items',
            'button_title'  => 'Add Service Item',
            'max'           => 6,
            'fields'        => array(
                array(
                    'id'    => 'v6-service-box-img',
                    'type'  => 'media',
                    'title' => 'Service Background Image',
                ),
                array(
                    'id'    => 'v6-service-box-icon',
                    'type'  => 'media',
                    'title' => 'Service Icon Image',
                ),
                array(
                    'id'    => 'v6-service-box-h3',
                    'type'  => 'text',
                    'title' => 'Service Title',
                ),
                array(
                    'id'    => 'v6-service-box-p',
                    'type'  => 'textarea',
                    'title' => 'Service Description',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
                ),
                array(
                    'id'    => 'v6-service-box-link',
                    'type'  => 'link',
                    'title' => 'Service Link',
                ),
            ),
        ),
    ),
));