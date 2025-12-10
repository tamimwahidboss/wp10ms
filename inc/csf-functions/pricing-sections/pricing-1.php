<?php
// Create a pricing section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Pricing Section',
    'fields' => array(

        // Short Title
        array(
            'id'    => 'v1-pricing-p',
            'type'  => 'text',
            'title' => 'Short Title',
        ),

        // Section Title
        array(
            'id'    => 'v1-pricing-h1',
            'type'  => 'text',
            'title' => 'Section Title',
        ),

        // Repeater Module
        array(
            'id'           => 'v1-pricing-rep',
            'type'         => 'repeater',
            'title'        => 'Add Client Pricing',
            'button_title' => 'Add More',
            'fields'       => array(

                // Plan Name
                array(
                    'id'    => 'v1-pricing-h3',
                    'type'  => 'text',
                    'title' => 'Plan Name',
                ),

                // Plan Details
                array(
                    'id'    => 'v1-pricing-p',
                    'type'  => 'text',
                    'title' => 'Details',
                ),

                // Currency
                array(
                    'id'    => 'v1-pricing-sym',
                    'type'  => 'text',
                    'title' => 'Currency($)',
                ),

                // Plan Price
                array(
                    'id'    => 'v1-pricing-cost',
                    'type'  => 'text',
                    'title' => 'Plan Price',
                ),

                // Renewal Time
                array(
                    'id'    => 'v1-pricing-sch',
                    'type'  => 'text',
                    'title' => 'Renew Time',
                ),

                // Plan Features Repeater
                array(
                    'id'           => 'v1-pricing-li-rep',
                    'type'         => 'repeater',
                    'title'        => 'Add Plan Features',
                    'button_title' => 'Add More',
                    'fields'       => array(

                        // List Item
                        array(
                            'id'    => 'v1-pricing-li',
                            'type'  => 'text',
                            'title' => 'List Item',
                        ),

                        // Active/Deactive Switcher
                        array(
                            'id'    => 'v1-price-ft-active',
                            'type'  => 'switcher',
                            'title' => 'Active/Deactive',
                        ),
                    ),
                ),
            ),
        ),
    ),
) );