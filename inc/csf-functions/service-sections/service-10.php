<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Service Section',
    'fields' => array(
        array(
            'id'      => 'v10-service-p',
            'type'    => 'text',
            'title'   => 'Section Subtitle',
            'default' => 'How We Can Help You',
        ),
        array(
            'id'      => 'v10-service-h1',
            'type'    => 'text',
            'title'   => 'Section Title',
            'default' => 'We Provide Awesome Solutions To Grow Your Business',
        ),
        array(
            'id'      => 'v10-service-des',
            'type'    => 'textarea',
            'title'   => 'Description',
            'default' => 'Discover how we can assist in achieving your business goals.',
        ),
        array(
            'id'            => 'v10-service-box-rep',
            'type'          => 'repeater',
            'title'         => 'Service Items',
            'button_title'  => 'Add Service',
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'    => 'v10-service-box-h4',
                    'type'  => 'text',
                    'title' => 'Skill Bar Title',
                ),
                array(
                    'id'      => 'v10-service-box-span',
                    'type'    => 'number',
                    'title'   => 'Skill Bar Progress (Number)',
                    'default' => 70,
                ),
            ),
        ),
        array(
            'id'      => 'v10-service-banner',
            'type'    => 'media',
            'title'   => 'Service Banner',
        ),
        array(
            'id'      => 'v10-service-ytv-link',
            'type'    => 'link',
            'title'   => 'YouTube Video Link',
        ),
        array(
            'id'      => 'v10-service-ytv-thumb',
            'type'    => 'media',
            'title'   => 'YouTube Video Thumbnail',
        ),
    ),
));