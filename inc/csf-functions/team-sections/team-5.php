<?php
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => 'Team Section',
    'fields' => array(
        array(
            'id'      => 'v5-team-img',
            'type'    => 'media',
            'title'   => 'Member Avatar',
        ),
        array(
            'id'      => 'v5-team-h4',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Meet Our Experienced Team Members',
        ),
        array(
            'id'      => 'v5-team-p',
            'type'    => 'text',
            'title'   => 'Description',
            'default' => 'Exclusive Members',
        ),
        array(
            'id'            => 'v5-team-social-rep',
            'type'          => 'repeater',
            'title'         => 'Social Media Links',
            'button_title'  => 'Add Link',
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'      => 'v5-team-social-icon',
                    'type'    => 'icon',
                    'title'   => 'Icon',
                    'default' => 'fab fa-facebook-f',
                ),
                array(
                    'id'      => 'v5-team-social-link',
                    'type'    => 'link',
                    'title'   => 'Social Link',
                    'default' => '#',
                ),
            ),
        ),
        array(
            'id'      => 'v5-team-ele1-h2',
            'type'    => 'text',
            'title'   => 'Element 1 Title',
            'default' => 'Meet Our Experience',
        ),
        array(
            'id'      => 'v5-team-ele1-p',
            'type'    => 'textarea',
            'title'   => 'Element 1 Description',
            'default' => 'Detailed description for the first element.',
        ),
        array(
            'id'      => 'v5-team-ele2-h2',
            'type'    => 'text',
            'title'   => 'Element 2 Title',
            'default' => 'Meet Our Experience',
        ),
        array(
            'id'            => 'v5-team-about-rep',
            'type'          => 'repeater',
            'title'         => 'About Section',
            'button_title'  => 'Add Link',
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'      => 'v5-team-about-icon',
                    'type'    => 'icon',
                    'title'   => 'Icon',
                    'default' => 'fab fa-facebook-f',
                ),
                array(
                    'id'      => 'v5-team-about-info',
                    'type'    => 'text',
                    'title'   => 'About Info',
                    'default' => 'info@example.com',
                ),
            ),
        ),
        array(
            'id'      => 'v5-team-ele3-h2',
            'type'    => 'text',
            'title'   => 'Element 3 Title',
            'default' => 'Meet Our Experience',
        ),
        array(
            'id'      => 'v5-team-ele3-p',
            'type'    => 'textarea',
            'title'   => 'Element 3 Description',
            'default' => 'Detailed description for the third element.',
        ),
        array(
            'id'            => 'v5-team-skill-rep',
            'type'          => 'repeater',
            'title'         => 'Skills',
            'button_title'  => 'Add Skill',
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'      => 'v5-team-ele4-h4',
                    'type'    => 'text',
                    'title'   => 'Skill Title',
                    'default' => 'Meet Our Experience',
                ),
                array(
                    'id'      => 'v5-team-ele4-span',
                    'type'    => 'text',
                    'title'   => 'Skill Level (%)',
                    'default' => '65',
                ),
            ),
        ),
    ),
));