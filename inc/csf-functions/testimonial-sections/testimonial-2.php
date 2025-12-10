<?php
// Create a testimonial section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Testimonial Section',
    'fields' => array(
        array(
            'id'          => 'v2-testimonial-rep',
            'type'        => 'repeater',
            'title'       => 'Add Client Testimonial',
            'button_title' => 'Add More',
            'fields'      => array(
                array(
                    'id'    => 'v2-testimonial-h2',
                    'type'  => 'text',
                    'title' => 'Testimonial',
                ),
                array(
                    'id'    => 'v2-testimonial-img',
                    'type'  => 'media',
                    'title' => 'Client Avatar',
                ),
                array(
                    'id'    => 'v2-testimonial-h3',
                    'type'  => 'text',
                    'title' => 'Client Name',
                ),
                array(
                    'id'    => 'v2-testimonial-p',
                    'type'  => 'text',
                    'title' => 'Client Profession',
                ),
            ),
        ),
    ),
) );