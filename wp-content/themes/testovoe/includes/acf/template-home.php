<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'template-home',
        'title' => 'Home page',
        'fields' => [
            [
                'key' => 'template-home_tab-about',
                'label' => 'About',
                'type' => 'tab',
            ],
            [
                'key' => 'template-home_about-title',
                'name' => 'about__title',
                'label' => 'Title',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'key' => 'template-home_about-mini_description',
                'name' => 'about__mini_description',
                'label' => 'Description (mini)',
                'type' => 'textarea',
                'required' => 1,
            ],
            [
                'key' => 'template-home_about-mini_image--pc',
                'name' => 'about__mini_image_pc',
                'label' => 'Mini image (pc)',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 0,
            ],
            [
                'key' => 'template-home_about-mini_image--mobile',
                'name' => 'about__mini_image_mobile',
                'label' => 'Mini image (mobile)',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
            ],
            [
                'key' => 'template-home_about-big_description',
                'name' => 'about__big_description',
                'label' => 'Description (big)',
                'type' => 'wysiwyg',
                'required' => 1,
            ],
            [
                'key' => 'template-home_about-big_image--pc',
                'name' => 'about__big_image_pc',
                'label' => 'Big image (pc)',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 0,
            ],
            [
                'key' => 'template-home_about-big_image--mobile',
                'name' => 'about__big_image_mobile',
                'label' => 'Big image (mobile)',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
            ],
            [
                'key' => 'template-home_about-slider',
                'label' => 'Slider',
                'name' => 'about__slider',
                'type' => 'repeater',
                'required' => 0,
                'layout' => 'table',
                'min' => 0,
                'max' => 0,
                'sub_fields' => [
                    [
                        'key' => 'template-home_about-slider_image',
                        'name' => 'image_id',
                        'label' => 'Image',
                        'type' => 'image',
                        'return_format' => 'id',
                        'required' => 1,
                    ],
                ],
            ],
        ],
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page_templates/home.php',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'label_placement' => 'top',
        'active' => true,
    ));

endif;