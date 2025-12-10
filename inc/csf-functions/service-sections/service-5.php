<?php
// Create a service section version 5
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Service Section',
    'fields' => array(
        array(
            'id'    => 'v5-service-p',
            'type'  => 'text',
            'title' => 'Section Subtitle',
            'default' => 'How Can We Help You',
        ),
        array(
            'id'    => 'v5-service-h1',
            'type'  => 'text',
            'title' => 'Section Title',
            'default' => 'We Provide Awesome Solutions To Grow Your Business',
        ),
        array(
            'id'     => 'v5-service-box-rep',
            'type'   => 'repeater',
            'title'  => 'Service Items',
            'button_title' => 'Add Service',
            'max'    => 6,
            'fields' => array(
                array(
                    'id'    => 'v5-service-box-img',
                    'type'  => 'media',
                    'title' => 'Service Background Image',
                ),
                array(
                    'id'    => 'v5-service-box-icon',
                    'type'  => 'icon',
                    'title' => 'Service Icon',
                ),
                array(
                    'id'    => 'v5-service-box-link',
                    'type'  => 'link',
                    'title' => 'Service Title & Link',
                ),
                array(
                    'id'    => 'v5-service-box-p',
                    'type'  => 'textarea',
                    'title' => 'Service Description',
                    'default' => 'Quis autem vel eum reprehenderit qui in voluptate velit esse quam nihil molestiae consequatur.',
                ),
            ),
        ),
    )
));