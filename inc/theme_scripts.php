<?php

function eiser_all_js_css()
{
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '4.1.3', 'all');
    wp_enqueue_style('linericon', get_template_directory_uri().'/vendors/linericon/style.css', array(), '1.0', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), ' 4.5.0', 'all');
    wp_enqueue_style('themify', get_template_directory_uri().'/css/themify-icons.css', array(), '1.0', 'all');
    wp_enqueue_style('owlc', get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.css', array(), '2.2.1', 'all');
    wp_enqueue_style('lighbox', get_template_directory_uri().'/vendors/lightbox/simpleLightbox.css', array(), '1.0', 'all');
    wp_enqueue_style('select', get_template_directory_uri().'/vendors/nice-select/css/nice-select.css', array(), '1.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri().'/vendors/animate-css/animate.css', array(), '1.0', 'all');
    wp_enqueue_style('jquery', get_template_directory_uri().'/vendors/jquery-ui/jquery-ui.css', array(), '1.12.1 ', 'all');
   
    wp_enqueue_style('main-css', get_template_directory_uri().'/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), '1.0', 'all');


    wp_enqueue_script('jquery');
    wp_enqueue_script('propper', get_template_directory_uri().'/js/popper.js"', array(), '1.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '4.1.3', true);
    wp_enqueue_script('stellar', get_template_directory_uri().'/js/stellar.js', array(), '0.6.2 ', true);
    wp_enqueue_script('lightbox', get_template_directory_uri().'/vendors/lightbox/simpleLightbox.min.js', array(), '1.0', true);
    wp_enqueue_script('nice', get_template_directory_uri().'/vendors/nice-select/js/jquery.nice-select.min.js', array(), '1.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri().'/vendors/isotope/imagesloaded.pkgd.min.js', array(), '4.1.0', true);
    wp_enqueue_script('min-isotope', get_template_directory_uri().'/vendors/isotope/isotope-min.js', array(), '3.0.1', true);
    wp_enqueue_script('owlc', get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.js', array(), '2.2.1', true);
    wp_enqueue_script('jque', get_template_directory_uri().'/vendors/jquery-ui/jquery-ui.js', array(), '1.12.1 ', true);
    wp_enqueue_script('ajax', get_template_directory_uri().'/js/jquery.ajaxchimp.min.js', array(), '1.0', true);
   
    wp_enqueue_script('theme', get_template_directory_uri().'/js/theme.js', array(), '1.0', true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'eiser_all_js_css');
