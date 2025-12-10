<?php
// Create a v3 price section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Price Section',
    'fields' => array(

        // Section Title (H6)
        array(
            'id'      => 'v3-price-sec-h6',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Pricing Package',
        ),

        // Section Title (H2)
        array(
            'id'      => 'v3-price-sec-h2',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Choose Your Best Plan',
        ),

        // Price Plan Repeater
        array(
            'id'           => 'v3-price-rep',
            'type'         => 'repeater',
            'title'        => 'Price Plan',
            'button_title' => 'Add More',
            'max'          => '3',
            'fields'       => array(

                // Currency Symbol
                array(
                    'id'      => 'v3-price-simble',
                    'type'    => 'text',
                    'title'   => 'Currency Symbol',
                    'default' => '$',
                ),

                // Plan Price
                array(
                    'id'      => 'v3-price-count',
                    'type'    => 'text',
                    'title'   => 'Price',
                    'default' => '19.00',
                ),

                // Schedule
                array(
                    'id'      => 'v3-price-schedule',
                    'type'    => 'text',
                    'title'   => 'Schedule',
                    'default' => '/Per Month',
                ),

                // Plan Name
                array(
                    'id'      => 'v3-price-plan',
                    'type'    => 'text',
                    'title'   => 'Plan Name',
                    'default' => 'Basic',
                ),

                // Button Text
                array(
                    'id'      => 'v3-price-btn-text',
                    'type'    => 'text',
                    'title'   => 'Button Name',
                    'default' => 'Get Started',
                ),

                // Button Link
                array(
                    'id'      => 'v3-price-btn-link',
                    'type'    => 'link',
                    'title'   => 'Button Link',
                    'default' => '#',
                ),

                // Plan Features Repeater
                array(
                    'id'           => 'v3-price-ft-rep',
                    'type'         => 'repeater',
                    'title'        => 'Plan Features',
                    'button_title' => 'Add More Features',
                    'max'          => '10',
                    'fields'       => array(

                        // Single Feature
                        array(
                            'id'      => 'v3-price-ft',
                            'type'    => 'text',
                            'title'   => 'Single Feature',
                            'default' => 'Advanced Custom Fields',
                        ),

                        // Feature Active/Deactive Switcher
                        array(
                            'id'    => 'v3-price-ft-active',
                            'type'  => 'switcher',
                            'title' => 'Active/Deactive',
                        ),
                    ),
                ),
            ),
        ),
    ),
) );