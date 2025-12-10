<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Service Section',
    'fields' => array(
        array(
            'id'      => 'v9-service-p',
            'type'    => 'text',
            'title'   => 'Section Subtitle',
            'default' => 'How We Can Help You',
        ),
        array(
            'id'      => 'v9-service-h1',
            'type'    => 'text',
            'title'   => 'Section Title',
            'default' => 'We Provide Awesome Solutions To Grow Your Business',
        ),
        array(
            'id'      => 'v9-service-des',
            'type'    => 'textarea',
            'title'   => 'Description',
            'default' => 'Discover how our solutions can help your business grow and thrive.',
        ),
        array(
            'id'            => 'v9-service-box-rep',
            'type'          => 'repeater',
            'title'         => 'Service Items',
            'button_title'  => 'Add Service',
            'max'           => 6,
            'fields'        => array(
                array(
                    'id'    => 'v9-service-box-icon',
                    'type'  => 'icon',
                    'title' => 'Service Icon',
                ),
                array(
                    'id'    => 'v9-service-box-h3',
                    'type'  => 'text',
                    'title' => 'Service Title',
                ),
                array(
                    'id'    => 'v9-service-box-p',
                    'type'  => 'textarea',
                    'title' => 'Service Description',
                    'default' => 'Quis autem vel eum reprehenderit qui voluptates esse quam.',
                ),
            ),
        ),
    ),
));