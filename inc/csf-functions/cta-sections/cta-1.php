<?php
// Create a v1 CTA section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => 'CTA Section',
    'fields' => array(
        array(
            'id'      => 'v1-cta-sec-h1',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Ready To Get Free Consultations For <br> Any Kind Of IT Solutions?',
        ),
        array(
            'id'      => 'v1-cta-btn',
            'type'    => 'link',
            'title'   => 'CTA Button',
        ),
    ),
) );