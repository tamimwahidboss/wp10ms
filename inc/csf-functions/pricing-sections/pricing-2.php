<?php
// Create a v2 price section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Price Section',
    'fields' => array(

        // Section Name
        array(
            'id'      => 'v2-price-span',
            'type'    => 'text',
            'title'   => 'Section Name',
            'default' => 'Section',
        ),

        // Short Title
        array(
            'id'      => 'v2-price-p',
            'type'    => 'text',
            'title'   => 'Short Title',
            'default' => 'Short Title',
        ),

        // Section Title
        array(
            'id'      => 'v2-price-h1',
            'type'    => 'text',
            'title'   => 'Section Title',
            'default' => 'Section Title',
        ),

        // Description
        array(
            'id'      => 'v2-price-des',
            'type'    => 'text',
            'title'   => 'Description',
            'default' => 'Description',
        ),

        // Button Link
        array(
            'id'      => 'v2-price-btn',
            'type'    => 'link',
            'title'   => 'Button Link',
            'default' => '#',
        ),

        // Price Plan Repeater
        array(
            'id'           => 'v2-price-rep',
            'type'         => 'repeater',
            'title'        => 'Price Plan',
            'button_title' => 'Add More',
            'max'          => '2',
            'fields'       => array(

                // Plan Name
                array(
                    'id'      => 'v2-price-plan-h3',
                    'type'    => 'text',
                    'title'   => 'Plan Name',
                    'default' => 'Section Title',
                ),

                // Plan Details
                array(
                    'id'      => 'v2-price-plan-p',
                    'type'    => 'text',
                    'title'   => 'Plan Details',
                    'default' => 'Section Title',
                ),

                // Currency Symbol
                array(
                    'id'      => 'v2-price-simble',
                    'type'    => 'text',
                    'title'   => 'Currency Symbol',
                    'default' => '$',
                ),

                // Plan Price
                array(
                    'id'      => 'v2-price-cost',
                    'type'    => 'text',
                    'title'   => 'Price',
                    'default' => '19.00',
                ),

                // Renewal Schedule
                array(
                    'id'      => 'v2-price-schedule',
                    'type'    => 'text',
                    'title'   => 'Schedule',
                    'default' => '/Per Month',
                ),

                // Plan Features Repeater
                array(
                    'id'           => 'v2-price-ft-rep',
                    'type'         => 'repeater',
                    'title'        => 'Plan Features',
                    'button_title' => 'Add More Features',
                    'max'          => '10',
                    'fields'       => array(

                        // Single Feature
                        array(
                            'id'      => 'v2-price-ft',
                            'type'    => 'text',
                            'title'   => 'Single Feature',
                            'default' => 'Advanced Custom Fields',
                        ),

                        // Active/Deactive Switch
                        array(
                            'id'    => 'v2-price-ft-active',
                            'type'  => 'switcher',
                            'title' => 'Active/Deactive',
                        ),
                    ),
                ),

                // Plan Button Link
                array(
                    'id'      => 'v2-price-plan-btn',
                    'type'    => 'link',
                    'title'   => 'Plan Button Link',
                    'default' => '#',
                ),
            ),
        ),
    ),
) );