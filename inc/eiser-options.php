<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' 	=> 'Eiser General Settings',
        'menu_title'	=> 'Eiser Options',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
    
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));
     
    acf_add_options_sub_page(array(
    'page_title' 	=> 'Home Page Settings',
    'menu_title'	=> 'Home Page',
    'parent_slug'	=> 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Contact Page Settings',
        'menu_title'	=> 'Contact Page',
        'parent_slug'	=> 'theme-general-settings',
        ));
    
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));
}
