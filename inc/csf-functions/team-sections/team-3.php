<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => 'Team Section',
    'fields' => array(
        array(
            'id'      => 'v3-team-p',
            'type'    => 'text',
            'title'   => 'Section Name',
            'default' => 'Exclusive Members',
        ),
        array(
            'id'      => 'v3-team-h1',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Meet Our Experienced Team Members',
        ),
        array(
            'id'      => 'v3-team-btn',
            'type'    => 'link',
            'title'   => 'Button Title & Link',
            'default' => '#',
        ),
        array(
            'id'            => 'v3-team-box-rep',
            'type'          => 'repeater',
            'title'         => 'Team Members',
            'button_title'  => 'Add Member',
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'      => 'v3-team-box-img',
                    'type'    => 'media',
                    'title'   => 'Member Avatar',
                ),
                array(
                    'id'      => 'v3-team-box-h4',
                    'type'    => 'text',
                    'title'   => 'Name',
                    'default' => 'Wallace S. Camacho',
                ),
                array(
                    'id'      => 'v3-team-box-p',
                    'type'    => 'text',
                    'title'   => 'Profession',
                    'default' => 'Business Manager',
                ),
                array(
                    'id'            => 'v3-team-social-rep',
                    'type'          => 'repeater',
                    'title'         => 'Social Links',
                    'button_title'  => 'Add Link',
                    'max'           => 4,
                    'fields'        => array(
                        array(
                            'id'      => 'v3-team-social-icon',
                            'type'    => 'icon',
                            'title'   => 'Social Icon',
                            'default' => 'fab fa-facebook-f',
                        ),
                        array(
                            'id'      => 'v3-team-social-link',
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