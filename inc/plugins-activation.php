<?php
function ogani_theme_register_required_plugins()
{
    $plugins = array(
        array(
            'name'=>__('Contact Form 7', 'eiser'),
            'slug'=> 'contact-form-7',
            'required'=> true,
        ),

        array(
            'name'=>__('Widget Import & Export', 'eiser'),
            'slug'=> 'widget-importer-exporter',
            'required'=> true,
        ),
        array(
         'name'=>__('One Click Demo Import', 'eiser'),
         'slug'=> 'one-click-demo-import',
         'required'=> true,
     ),

        array(
           'name'=>__('Advanced Custom Fields: Font Awesome Field', 'eiser'),
           'slug'=> 'advanced-custom-fields-font-awesome',
           'required'=> true,
        ),

         
        array(
            'name'=>__('Advanced Custom Fields', 'eiser'),
            'slug'=> 'advanced-custom-fields',
            'required'=> true,
         ),
         array(
            'name'=>__('Woocommerce', 'eiser'),
            'slug'=> 'woocommerce',
            'required'=> true,
         ),
         array(
            'name'=>__('YITH WooCommerce Wishlist', 'eiser'),
            'slug'=> 'yith-woocommerce-wishlist',
            'required'=> true,
         ),
         array(
            'name'=>__('YITH WooCommerce Compare', 'eiser'),
            'slug'=> 'yith-woocommerce-compare',
            'required'=> true,
         ),
         array(
            'name'=>__('Classic Widgets', 'eiser'),
            'slug'=> 'classic-widgets',
            'required'=> true,
         ),

         array(
            'name'=>__('Advanced Custom Fields PRO', 'eiser'),
            'slug'=> 'advanced-custom-fields-pro',
            'source'=> get_template_directory().'/plugins-pre/advanced-custom-fields-pro.zip',
            'required'=> true,
         ),
    );

    $config= array(
        'id'=> 'ogani-plugin-active',
        'menu'=> 'Ogani Plugins Activation',
        'parent_slug'=> 'themes.php',
        'has_notices'=> true,

    );
    tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'ogani_theme_register_required_plugins');
