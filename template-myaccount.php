

<?php get_header();
/* Template Name: myaccount */

?>
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div
        class="banner_content d-md-flex justify-content-between align-items-center"
      >
        <div class="mb-3 mb-md-0">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="page_link">
        <?php woocommerce_breadcrumb(); ?>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->
<section class="cart_page myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12 woocommerce_login_width">
                <?php echo do_shortcode(' [woocommerce_my_account] '); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>