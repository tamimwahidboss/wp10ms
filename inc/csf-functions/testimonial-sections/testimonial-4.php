<?php
// Create a v6 Testimonial section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Testimonial Section',
    'fields' => array(
        array(
            'id'      => 'v4-testimonial-sec-h6',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Testimonials',
        ),
        array(
            'id'      => 'v4-testimonial-sec-h2',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'What people say About Techex',
        ),
        array(
            'id'          => 'v4-testimonial-rep',
            'type'        => 'repeater',
            'title'       => 'Testimonial Feedback',
            'max'         => '6',
            'button_title' => 'Add More',
            'fields'      => array(
                array(
                    'id'      => 'v4-testimonial-img',
                    'type'    => 'media',
                    'title'   => 'Testimonial Image',
                    'default' => '#',
                ),
                array(
                    'id'      => 'v4-testimonial-h4',
                    'type'    => 'text',
                    'title'   => 'Testimonial Name',
                    'default' => 'Elizabeth Linda',
                ),
                array(
                    'id'      => 'v4-testimonial-prof',
                    'type'    => 'text',
                    'title'   => 'Testimonial Profession',
                    'default' => 'Company Manager',
                ),
                array(
                    'id'      => 'v4-testimonial-feed',
                    'type'    => 'textarea',
                    'title'   => 'Testimonial Feedback',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
                ),
                array(
                    'id'      => 'v4-testimonial-comp-logo',
                    'type'    => 'media',
                    'title'   => 'Testimonial Company Logo',
                    'default' => '#',
                ),
            ),
        ),
    ),
) );