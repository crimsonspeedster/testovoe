<?php

add_action( 'wp_enqueue_scripts', function () {
    $ver = 1;

    wp_enqueue_style( 'font-vetrino', get_stylesheet_directory_uri() . '/dist/fonts/vetrino/stylesheet.css', [], $ver );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/dist/css/style.css', [], $ver );

    wp_enqueue_script('child-scripts', get_stylesheet_directory_uri() . '/dist/js/script.js', [], $ver,  true);
}, 10010 );
