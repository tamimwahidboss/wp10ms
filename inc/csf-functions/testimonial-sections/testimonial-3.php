<?php
// Create a testimonial section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Testimonial Section',
    'fields' => array(
        array(
            'id'    => 'v3-testimonial-p',
            'type'  => 'text',
            'title' => 'Top Title',
        ),
        array(
            'id'    => 'v3-testimonial-h1',
            'type'  => 'text',
            'title' => 'Section Title',
        ),
        array(
            'id'          => 'v3-testimonial-rep',
            'type'        => 'repeater',
            'title'       => 'Add Client Testimonial',
            'button_title' => 'Add More',
            'fields'      => array(
                array(
                    'id'    => 'v3-testimonial-h2',
                    'type'  => 'text',
                    'title' => 'Testimonial',
                ),
                array(
                    'id'    => 'v3-testimonial-details',
                    'type'  => 'textarea',
                    'title' => 'Company Details',
                    'default' => '<a href="#">Symash Petel,</a> CEO-Aliner',
                ),
            ),
        ),
        array(
            'id'    => 'v3-testimonial-banner',
            'type'  => 'media',
            'title' => 'Section Banner',
        ),
    ),
) );