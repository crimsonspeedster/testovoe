<?php

add_filter('block_categories', function ($categories, $post) {
    return array_merge(
        array(
            array(
                'slug' => 'testovoe',
                'title' => 'Testovoe',
            ),
        ),
        $categories,
    );
}, 1, 2);

if (function_exists('acf_register_block_type')) {
    $blocks_path = get_template_directory() . '/includes/acf_blocks';
    $blocks_path_uri = get_template_directory_uri() . '/includes/acf_blocks';

//    acf_register_block_type(array(
//        'name'              => 'widget-social',
//        'title'             => 'Widget Social',
//        'description'       => 'Widget Social',
//        'render_template'   => $blocks_path . '/widget-social/render.php',
//        'category'          => 'testovoe',
//        'icon'              => 'admin-comments',
//        'mode'              => 'edit',
//    ));
}