<?php get_header(); ?>

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div
                class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2><?php single_post_title(); ?></h2>

                </div>
                <div class="page_link">
                <?php woocommerce_breadcrumb(); ?>
                   
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img
                                class="card-img rounded-0"
                                src="<?php echo the_post_thumbnail_url() ?>"
                                alt="">
                            <a href="#" class="blog_item_date">
                                <h3><?php echo get_the_date('j'); ?></h3>
                                <p><?php echo get_the_date('M'); ?></p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                            <p><?php the_excerpt(); ?></p>
                            <ul class="blog-info-link">
                                <li>
                                    <i class="ti-user"></i><?php the_category(' , '); ?></li>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <i class="ti-comments"></i>
                                        <?php comments_number();  ?></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>

                    <nav class="blog-pagination justify-content-center d-flex">

                        <?php the_posts_pagination(array( 'prev_text'=> '<span
                        class="ti-arrow-left"></span>', 'next_text'=> '<span
                        class="ti-arrow-right"></span>', )); ?>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <?php get_search_form() ?>
                    <?php dynamic_sidebar('blog_sidebar') ?>
                </div>

            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
<?php get_footer(); ?>