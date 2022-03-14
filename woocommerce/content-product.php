<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || ! $product->is_visible()) {
    return;
}
?>
<li <?php wc_product_class('', $product); ?>>

   <div class="single-product">
     <div class="product-img">
       <img
         class="card-img"
         src="<?php echo the_post_thumbnail_url() ?>"
        
       />
       <div class="p_icon">

	   <a href="<?php echo esc_url(home_url()); ?>/?action=yith-woocompare-add-product&amp;id=<?php echo get_the_ID(); ?>" class="compare button" data-product_id="<?php echo get_the_ID(); ?>" rel="nofollow"><i class="ti-eye"></i></a>

		<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
		
     	</a>
		  

     <a href="<?php echo esc_url(home_url()); ?>/?add-to-cart=<?php echo get_the_ID(); ?>&quot;" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>"><i class="ti-shopping-cart"></i></a>
        
       </div>
     </div>
     <div class="product-btm">
       <a href="<?php the_permalink(); ?>" class="d-block">
         <h4><?php  woocommerce_template_loop_product_title(); ?></h4>
       </a>
       <div class="mt-3">
         <?php woocommerce_template_loop_price() ?>
        
       </div>
     </div>
   </div>


	<?php
    /**
     * Hook: woocommerce_before_shop_loop_item.
     *
     * @hooked woocommerce_template_loop_product_link_open - 10
     */
    //do_action( 'woocommerce_before_shop_loop_item' );

    /**
     * Hook: woocommerce_before_shop_loop_item_title.
     *
     * @hooked woocommerce_show_product_loop_sale_flash - 10
     * @hooked woocommerce_template_loop_product_thumbnail - 10
     */
    //do_action( 'woocommerce_before_shop_loop_item_title' );

    /**
     * Hook: woocommerce_shop_loop_item_title.
     *
     * @hooked woocommerce_template_loop_product_title - 10
     */
    //do_action( 'woocommerce_shop_loop_item_title' );

    /**
     * Hook: woocommerce_after_shop_loop_item_title.
     *
     * @hooked woocommerce_template_loop_rating - 5
     * @hooked woocommerce_template_loop_price - 10
     */
    //do_action( 'woocommerce_after_shop_loop_item_title' );

    /**
     * Hook: woocommerce_after_shop_loop_item.
     *
     * @hooked woocommerce_template_loop_product_link_close - 5
     * @hooked woocommerce_template_loop_add_to_cart - 10
     */
    //do_action( 'woocommerce_after_shop_loop_item' );
    ?>
</li>
