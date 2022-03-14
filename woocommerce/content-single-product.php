<?php
 defined('ABSPATH') || exit; global
$product; ?>

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div
                class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>Product Single</h2>
                </div>
                <div class="page_link">
                    <?php woocommerce_breadcrumb(); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================Single Product Area =================-->
<div class="product_image_area text-left">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php do_action('woocommerce_before_single_product');  ?>
            </div>
        </div>
        <div class="row s_product_inner">
        <div class="col-lg-6 col-md-6">
        <div class="s_product_img">
        <div class="product__details__pic">
					<div class="product__details__pic__item">
			<img class="product__details__pic__item--large" src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>">
                   
					</div>
					<div class="product__details__pic__slider owl-carousel mt-4">
						<?php
                          $attachment_ids = $product->get_gallery_image_ids();

                        foreach ($attachment_ids as $attachment_id) {
                            $image_link = wp_get_attachment_url($attachment_id); ?>
                            
							<img data-imgbigurl="<?php echo $image_link; ?>"
                      
	                         src="<?php echo $image_link; ?>" >
                         
                          
                       <?php
                        }
                        ?>
					</div>
                    </div>
				

			</div>
			</div>


                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3><?php woocommerce_template_single_title(); ?></h3>
                        <?php woocommerce_template_single_rating(); ?>
                        <h2><?php woocommerce_template_single_price(); ?></h2>
                        <ul class="list">
                            <li>
                              
                                    <span>Category</span> :  <?php $categ = $product->get_categories(); echo $categ;?>
                            </li>
                            <li>
                            
                                    <span>Availibility :  In Stock </span>
                                
                                
                             
                            </li>
                        </ul>

                        <?php woocommerce_template_single_excerpt(); ?>

                        <div class="card_area">
                            <?php woocommerce_template_single_add_to_cart(); ?>
                         <div class="inline">
                            <a
                                href="<?php echo esc_url(home_url()); ?>/?action=yith-woocompare-add-product&amp;id=<?php echo get_the_ID(); ?>"
                                class="icon_btn compare button"
                                data-product_id="<?php echo get_the_ID(); ?>"
                                rel="nofollow">
                                <i class="lnr lnr lnr-diamond"></i>
                            </a>

                            <a class="icon_btn" href="#">
                                <i class="lnr lnr lnr-heart"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->
    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (post_password_required()) {
                            echo get_the_password_form(); // WPCS: XSS ok. return;
                        } ?>
                    <div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

                        <?php
                       
                       
                        do_action('woocommerce_after_single_product_summary'); ?>
                    </div>

                    <?php //do_action('woocommerce_after_single_product');?>

                </div>
            </div>

        </div>
    </section>
    <!--================End Product Description Area =================-->