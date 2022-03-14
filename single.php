<?php get_header();
global $post;
$author_id = $post->post_author;
?>

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2><?php single_post_title(); ?></h2>
             
            </div>
            <div class="page_link">
              <?php woocommerce_breadcrumb(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
	<section class="blog_area single-post-area section_gap">
			<div class="container">
					<div class="row">
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> </div>
							<div class="col-lg-8 posts-list">
									<div class="single-post">
													<div class="feature-img">
															<img class="img-fluid" src="<?php echo the_post_thumbnail_url() ?>" >
													</div>
											<div class="blog_details">
													<h2>
                              <?php the_title(); ?></h2>
                          <ul class="blog-info-link mt-3 mb-4">
                              <li><i class="ti-user"></i> <?php the_category(' , '); ?></li>
                              <li><a href="<?php the_permalink(); ?>"><i class="ti-comments"></i> <?php comments_number(); ?></a></li>
                            </ul>
                            <?php the_content() ; ?>


											</div>
                  </div>
                  <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                      <p class="like-info"><span class="align-middle"><i class="ti-heart"></i></span></p>
                      <div class="col-sm-4 text-center my-2 my-sm-0">
                        <p class="comment-count"><span class="align-middle"><i class="ti-comment"></i></span> <?php comments_number(); ?></p>
                      </div>
                      <ul class="social-icons">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-dribbble"></i></a></li>
                        <li><a href="#"><i class="ti-wordpress"></i></a></li>
                      </ul>
                    </div>

                    <div class="navigation-area">
                        <div class="row">
                           <?php
                             $prev_post = get_previous_post();
                             $id = $prev_post->ID ;
                             $permalink = get_permalink($id);
                             $prevThumbnail =get_the_post_thumbnail_url($prev_post->ID);
                         ?>
                         <?php
                             $next_post = get_next_post();
                             $nid = $next_post->ID ;
                             $permalinks = get_permalink($nid);
                             $nextThumbnail = get_the_post_thumbnail_url($next_post->ID)
                         ?>
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    
                                        <img class="img-fluid" src="<?php echo $prevThumbnail; ?>">
                                        
                                  
                                    
                                </div>
                                <div class="arrow">
                                    <a href="<?php echo $permalink; ?>">
                                        <span class="ti-arrow-left text-white"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                  
                                    <p>Prev Post</p>
                                    <a href="<?php echo $permalink; ?>">
                                        <h5><?php echo $prev_post->post_title; ?></h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="<?php echo $permalinks; ?>">
                                        <h5><?php echo $next_post->post_title; ?></h5>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="<?php echo $permalinks; ?>">
                                        <span class="ti-arrow-right text-white"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                  
                                        <img class="img-fluid" src="<?php echo $nextThumbnail; ?>">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  
                  
                  <div class="blog-author">
                    <div class="media align-items-center">
                      <img src="<?php echo get_avatar_url($author_id)?>">
                      <div class="media-body">
                        <a href="#">
                          <h4><?php the_author_meta('display_name', $author_id); ?></h4>
                        </a>
                        <p><?php the_author_meta('description', $author_id); ?></p>
                      </div>
                    </div>
                  </div>
  
  
									<div class="comment-form">
										
                      
                      <?php if (comments_open() || get_comments_number()) : comments_template();
                        endif; ?>
                      
                     
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