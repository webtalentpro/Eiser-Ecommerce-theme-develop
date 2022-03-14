<?php


require_once('inc/theme_scripts.php');
require_once('inc/theme_default.php');
require_once('inc/bs4navwalker.php');
require_once('inc/theme_widgets.php');
require_once('inc/eiser-options.php');
require_once('inc/plugins-activation.php');
require_once('inc/class-tgm-plugin-activation.php');
require_once('inc/one-click-importer.php');



/**
 * Change number or products per row to 3
 */

if (!function_exists('loop_columns')) {
    function loop_columns()
    {
        return 3; // 3 products per row
    }
}
add_filter('loop_shop_columns', 'loop_columns', 999);


//  Related product column change

function jk_related_products_args($args)
{
    $args['posts_per_page'] = 3; // 4 related products
$args['columns']            = 3; // arranged in columns

return $args;
}
add_filter('woocommerce_output_related_products_args', 'jk_related_products_args');


function cart_update_qty_script()
{
    if (is_cart()) :
    ?> 
    <script>
    jQuery( 'div.woocommerce' ).on( 'change', '.qty', function () {
    jQuery( "[name='update_cart']" ).trigger( "click" );
    } );
    </script>
    <?php
    endif;
}
add_action('wp_footer', 'cart_update_qty_script');
