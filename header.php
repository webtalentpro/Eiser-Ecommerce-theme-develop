<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <!-- Required meta tags -->
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <?php global $woocommerce; ?>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="top_menu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="float-left">
                                <?php if ($phone=get_field('header_phone', 'options')) {?>
                                    <p><?php echo $phone; ?></p>
                                <?php }?>

                                <?php if ($email=get_field('header_email ', 'options')) {?>
                                   <p> Email : <?php echo $email; ?></p>
                                <?php }?>

                                
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="float-right">

                                <?php wp_nav_menu(array( 'theme_location'=> 'top_menu', 'menu_class'=>
                                'right_side' )); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_menu">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light w-100">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <?php if ($header_logo=get_field('header_logo', 'options')) {?>
                        <a class="navbar-brand logo_h" href="<?php echo esc_url(home_url()); ?>">
                            <img src="<?php echo $header_logo['url']; ?>"/>
                        </a>
                        <?php } ?>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                            <div class="row w-100 mr-0">

                                <?php wp_nav_menu([ 'menu' => 'primary_menu', 'theme_location' =>
                                'primary_menu', 'container' => 'div', 'container_id' => '', 'container_class' =>
                                'col-lg-7 pr-0', 'menu_id' => false, 'menu_class' => 'nav navbar-nav center_nav
                                pull-right', 'depth' => 2, 'fallback_cb' => 'bs4navwalker::fallback', 'walker'
                                => new bs4navwalker() ]); ?>

                                <div class="col-lg-5 pr-0">
                                    <ul class="nav navbar-nav navbar-right right_nav pull-right">

                                        <li class="nav-item">

                                            <a href="<?php echo wc_get_cart_url() ?>" class="icons">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span><?php echo $woocommerce->cart->cart_contents_count ?></span>
                                            </a>
                                        </li>

                                        <li class="nav-item">

                                            <a href="<?php echo get_page_link(99); ?>" class="icons">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                                <span><?php $count = 0; if (function_exists('yith_wcwl_count_products')) {
                                    echo
                                                    $count = yith_wcwl_count_products();
                                } ?></span>
                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================Header Menu Area =================-->