<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Team Section',
    'fields' => array(
        array(
            'id'      => 'v2-team-span',
            'type'    => 'text',
            'title'   => 'Section Subtitle',
            'default' => 'Exclusive Members',
        ),
        array(
            'id'      => 'v2-team-h1',
            'type'    => 'text',
            'title'   => 'Section Title',
            'default' => 'Meet Our Experienced Team Members',
        ),
        array(
            'id'      => 'v2-team-p',
            'type'    => 'text',
            'title'   => 'Section Name',
            'default' => 'Exclusive Members',
        ),
        array(
            'id'            => 'v2-team-box-rep',
            'type'          => 'repeater',
            'title'         => 'Team Members',
            'button_title'  => 'Add Member',
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'      => 'v2-team-box-img',
                    'type'    => 'media',
                    'title'   => 'Member Avatar',
                ),
                array(
                    'id'      => 'v2-team-box-h4',
                    'type'    => 'text',
                    'title'   => 'Name',
                    'default' => 'Wallace S. Camacho',
                ),
                array(
                    'id'      => 'v2-team-box-p',
                    'type'    => 'text',
                    'title'   => 'Profession',
                    'default' => 'Business Manager',
                ),
                array(
                    'id'            => 'v2-team-social-rep',
                    'type'          => 'repeater',
                    'title'         => 'Social Links',
                    'button_title'  => 'Add Link',
                    'max'           => 4,
                    'fields'        => array(
                        array(
                            'id'      => 'v2-team-social-icon',
                            'type'    => 'icon',
                            'title'   => 'Icon',
                            'default' => 'fab fa-facebook-f',
                        ),
                        array(
                            'id'      => 'v2-team-social-link',
                            'type'    => 'link',
                            'title'   => 'Social Link',
                            'default' => '#',
                        ),
                    ),
                ),
            ),
        ),
    ),
));