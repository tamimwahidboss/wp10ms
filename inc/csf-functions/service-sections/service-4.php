<?php
// Create a service section version 4
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Service',
    'fields' => array(
        array(
            'id'    => 'v4-service-p',
            'type'  => 'text',
            'title' => 'Section Name',
            'default' => 'How Can We Help You',
        ),
        array(
            'id'    => 'v4-service-h1',
            'type'  => 'text',
            'title' => 'Service Title',
            'default' => 'We Provide Best IT Solutions For Business for 25 Years',
        ),
        array(
            'id'     => 'v4-service-box-rep',
            'type'   => 'repeater',
            'title'  => 'Service Items',
            'button_title' => 'Add Service',
            'max'    => 6,
            'fields' => array(
                array(
                    'id'    => 'v4-service-box-icon',
                    'type'  => 'icon',
                    'title' => 'Service Icon',
                ),
                array(
                    'id'    => 'v4-service-box-title',
                    'type'  => 'text',
                    'title' => 'Service Title',
                ),
                array(
                    'id'    => 'v4-service-box-link',
                    'type'  => 'link',
                    'title' => 'Service Link',
                ),
                array(
                    'id'    => 'v4-service-box-p',
                    'type'  => 'textarea',
                    'title' => 'Service Description',
                    'default' => 'Sed perspiciatis unde omnis natus sit voluptatem.',
                ),
            ),
        ),
    )
));