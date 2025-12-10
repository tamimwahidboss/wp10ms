<?php
// Create a testimonial section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Testimonial Section',
    'fields' => array(
        array(
            'id'    => 'v1-testimonial-banner',
            'type'  => 'media',
            'title' => 'Section Banner',
        ),
        array(
            'id'          => 'v1-testimonial-rep',
            'type'        => 'repeater',
            'title'       => 'Add Client Testimonial',
            'button_title' => 'Add more',
            'fields'      => array(
                array(
                    'id'    => 'v1-testimonial-h2',
                    'type'  => 'text',
                    'title' => 'Plan Name',
                ),
                array(
                    'id'    => 'v1-testimonial-h3',
                    'type'  => 'text',
                    'title' => 'Plan Name',
                ),
                array(
                    'id'    => 'v1-testimonial-p',
                    'type'  => 'text',
                    'title' => 'Details',
                ),
            ),
        ),
    ),
) );