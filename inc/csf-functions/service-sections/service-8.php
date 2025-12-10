<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Service Section',
    'fields' => array(
        array(
            'id'      => 'v8-work-sec-banner',
            'type'    => 'media',
            'title'   => 'Banner Image',
            'default' => '',
        ),
        array(
            'id'      => 'v8-work-sec-vid',
            'type'    => 'link',
            'title'   => 'Popup Video Link',
            'default' => '',
        ),
        array(
            'id'      => 'v8-work-sec-vid-icon',
            'type'    => 'icon',
            'title'   => 'Video Icon',
            'default' => 'fas fa-play',
        ),
        array(
            'id'      => 'v8-work-sec-h6',
            'type'    => 'text',
            'title'   => 'Subtitle',
            'default' => 'Our working process',
        ),
        array(
            'id'      => 'v8-work-sec-h2',
            'type'    => 'text',
            'title'   => 'Main Title',
            'default' => 'We Follow 3 Steps to Grow Your Business',
        ),
        array(
            'id'      => 'v8-work-sec-des',
            'type'    => 'textarea',
            'title'   => 'Description',
            'default' => 'Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
        ),
        array(
            'id'            => 'v8-work-box-repeater',
            'type'          => 'repeater',
            'title'         => 'Progress Bars',
            'max'           => 2,
            'button_title'  => 'Add More',
            'fields'        => array(
                array(
                    'id'    => 'v8-work-prog-h4',
                    'type'  => 'text',
                    'title' => 'Technology',
                    'default' => 'Technology',
                ),
                array(
                    'id'    => 'v8-work-prog-count',
                    'type'  => 'text',
                    'title' => 'Progress Percentage',
                    'default' => '79%',
                ),
            ),
        ),
    ),
));