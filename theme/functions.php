<?php
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_filter('document_title_separator', fn() => '|');
    register_nav_menus(['primary' => 'Primary Navigation']);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'jennythunberg-style',
        get_stylesheet_uri(),
        [],
        '1.0.0'
    );
});
