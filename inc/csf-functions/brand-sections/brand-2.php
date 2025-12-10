<?php
// Create a client brand section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => 'Brand Section',
    'fields' => array(

        // Repeater module for adding client brands
        array(
            'id'          => 'v2-brand-rep',
            'type'        => 'repeater',
            'title'       => 'Add Client Brand',
            'button_title' => 'Add more',
            'fields'      => array(

                // Add client brand logo
                array(
                    'id'    => 'v2-brand-logo',
                    'type'  => 'media',
                    'title' => 'Brand Logo',
                ),
            ),
        ),
    ),
) );