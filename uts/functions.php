<?php

function eduspace_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    register_nav_menus(array(
        'primary' => 'Menu Utama'
    ));
}

add_action('after_setup_theme', 'eduspace_setup');

function eduspace_load_assets() {
    wp_enqueue_style(
        'eduspace-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'eduspace_load_assets');