<?php
// Create a v6 CTA section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => 'CTA Section',
    'fields' => array(
        array(
            'id'      => 'v6-cta-sec-h1',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Ready To Get Free Consultations For <br> Any Kind Of IT Solutions?',
        ),
        array(
            'id'            => 'v6-cta-sec-rep',
            'type'          => 'repeater',
            'title'         => 'CTA Button',
            'button_title'  => 'Add CTA',
            'max'           => '2',
            'fields'        => array(
                array(
                    'id'    => 'v6-cta-btn-link',
                    'type'  => 'link',
                    'title' => 'CTA Button',
                ),
                array(
                    'id'      => 'v6-cta-btn-icon',
                    'type'    => 'icon',
                    'title'   => 'CTA Icon',
                    'default' => 'icon-arrow-right-1',
                ),
            ),
        ),
    ),
) );