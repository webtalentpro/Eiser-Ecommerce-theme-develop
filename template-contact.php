<?php get_header(); ?>

    <!--================Home Banner Area =================-->
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

    <!-- ================ contact section start ================= -->
  <section class="section_gap">
    <div class="container">
      <div class="d-sm-block mb-5 pb-4">
      
        <?php the_field('google_map', 'options'); ?>
       
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <?php echo do_shortcode('[contact-form-7 id="271" title="eiser contact form"]'); ?>


        </div>

        <div class="col-lg-4">
          <?php if ($contacts=get_field('contact_information', 'options')) {
    foreach ($contacts as $contact) { ?>
      
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa <?php echo $contact['icon']; ?>"></i></span>
            <div class="media-body">
            <?php echo $contact['info_details']; ?>
             
            </div>
          </div>
          <?php }
} ?>
          
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
  <?php get_footer(); ?>