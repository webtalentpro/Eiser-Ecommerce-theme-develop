<?php get_header(); ?>

<!--================Home Banner Area =================-->
<?php $banner_bg=get_field('hero_banner_image', 'options'); ?>
<section
    class="home_banner_area mb-40"
    style=" background: url(<?php echo $banner_bg['url'] ?>) no-repeat center bottom;">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="col-lg-12">
                    <p class="sub text-uppercase"><?php the_field('banner_subtitle', 'options'); ?></p>
                    <h3>

                        <?php the_field('banner_title', 'options'); ?>

                    </h3>
                    <h4>
                        <?php the_field('banner_short_description', 'options'); ?></h4>
                    <a class="main_btn mt-40" href=" <?php the_field('button_url', 'options'); ?>">
                        <?php the_field('banner_button_text', 'options'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!-- Start feature Area -->
<section class="feature-area section_gap_bottom_custom">
    <div class="container">
        <div class="row">
            <?php if ($features=get_field('feature_items', 'options')) {
    foreach ($features as $feature) {
        ?>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title">
                        <i class="fa <?php echo $feature['feature_icon']; ?>"></i>
                        <h3><?php echo $feature['feature_title']; ?></h3>
                    </a>
                    <p><?php echo $feature['feature_description']; ?></p>
                </div>
            </div>

            <?php
    }
} ?>

        </div>
    </div>
</section>
<!-- End feature Area -->

<!--================ Feature Product Area =================-->
<section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2>
                        <span>Featured product</span>
                    </h2>
                    <p>Bring called seed first of third give itself now ment</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 3,
            'tax_query' => array( array( 'taxonomy' => 'product_visibility', 'field' =>
            'name', 'terms' => 'featured', 'operator' => 'IN', ), ), ); $loop = new
            WP_Query($args); if ($loop->have_posts()) {
                while ($loop->have_posts()) :
            $loop->the_post(); ?>
            <div class="col-lg-4 col-md-6">

                <?php  wc_get_template_part('content', 'product'); ?>
            </div>

        <?php   endwhile;
            }
    wp_reset_postdata(); ?>

        </div>
    </section>
    <!--================ End Feature Product Area =================-->

    <!--================ Offer Area =================-->
    <?php $offbg=get_field('offer_banner_add_image', 'options') ?>
    <section class="offer_area"  style=" background: url(<?php echo $offbg['url'] ?>) no-repeat center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="offset-lg-4 col-lg-6 text-center">
                    <div class="offer_content">
                        <h3 class="text-uppercase mb-40"><?php the_field('offer_subtitle', 'options'); ?></h3>
                        <h2 class="text-uppercase"><?php the_field('discount_title_text', 'options'); ?></h2>
                        <a href="<?php the_field('button_link', 'options'); ?>" class="main_btn mb-20 mt-5"><?php the_field('button_text', 'options'); ?></a>
                        <p><?php the_field('offer_short_description', 'options'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Offer Area =================-->

    <!--================ New Product Area =================-->
    <section class="new_product_area section_gap_top section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2>
                            <span>new products</span>
                        </h2>
                        <p>Bring called seed first of third give itself now ment</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                <?php if ($collections=get_field('special_product_collection', 'options')
) {?>
                    <div class="new_product">
                        <h5 class="text-uppercase"><?php echo $collections['product_subtitle']; ?></h5>
                        <h3 class="text-uppercase"><?php echo $collections['product_title']; ?></h3>
                        <div class="product-img">
                           
                            <img
                                class="img-fluid"
                                src="<?php echo $collections['product_image']['url'] ?>"
                                />
                                
                        </div>
                        <h4><?php echo $collections['product_price']; ?></h4>
                        <?php if ($collections['button_text']) {?>
                        <a href="<?php echo $collections['button__link']; ?>" class="main_btn"><?php echo $collections['button_text']; ?></a>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="row">

                        <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 4, ); $loop =
                        new WP_Query($args); if ($loop->have_posts()) {
                            while ($loop->have_posts()) :
                        $loop->the_post(); ?>
                        <div class="col-lg-6 col-md-6">
                            <?php  wc_get_template_part('content', 'product'); ?>
                        </div>
                    <?php   endwhile;
                        }
                       wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End New Product Area =================-->

    <!--================ Inspired Product Area =================-->
    <section class="inspired_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2>
                            <span>Inspired products</span>
                        </h2>
                        <p>Bring called seed first of third give itself now ment</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 8, ); $loop =
                new WP_Query($args); if ($loop->have_posts()) {
                    while ($loop->have_posts()) :
                $loop->the_post(); ?>
                <div class="col-lg-3 col-md-6">
                    <?php  wc_get_template_part('content', 'product'); ?>
                </div>
            <?php   endwhile;
                }
                       wp_reset_postdata(); ?>

            </div>
        </div>
    </section>
    <!--================ End Inspired Product Area =================-->

    <!--================ Start Blog Area =================-->
    <section class="blog-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2>
                            <span>latest blog</span>
                        </h2>
                        <p>Bring called seed first of third give itself now ment</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php $args=array( 'post_type'=> 'post', 'posts_per_page'=> 3, 'order'=> 'ASC'
                ); $loop=new WP_Query($args); if ($loop->have_posts()) {
                    while ($loop->have_posts()): $loop->the_post(); ?>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="<?php echo the_post_thumbnail_url() ?>" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">By
                                    <?php the_author(); ?></a>
                                <a href="#">
                                    <i class="ti-comments-smiley"></i><?php comments_number(); ?></a>
                            </div>
                            <a class="d-block" href="<?php the_permalink(); ?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <div class="text-wrap">

                                <?php the_excerpt(); ?>

                            </div>
                            <a href="<?php the_permalink(); ?>" class="blog_btn">Learn More
                                <span class="ml-2 ti-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                }wp_reset_postdata(); ?>

            </div>
        </div>
    </section>
    <!--================ End Blog Area =================-->
    <?php get_footer(); ?>