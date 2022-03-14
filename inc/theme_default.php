<?php

function eiser_after_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    add_theme_support('post-thumbnails', array('post', 'psge'));
    add_theme_support('automatic-feed-links');
    add_theme_support(' register_block_style');
    add_theme_support("wp-block-styles");
    add_theme_support("html5");
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    load_theme_textdomain('eiser', get_template_directory_uri().'/language/');
    register_nav_menus(array(
        'primary_menu'=>__('Primary Menu', 'eiser'),
        'top_menu'=>__('Top Menu', 'eiser'),
    ));
}
add_action('after_setup_theme', 'eiser_after_theme_setup');


function excerpt_more_option($more)
{
    global $post;
    return '</br>';
}
add_action('excerpt_more', 'excerpt_more_option');

function excerpt_length_option($length)
{
    return 15;
}
add_action('excerpt_length', 'excerpt_length_option');
