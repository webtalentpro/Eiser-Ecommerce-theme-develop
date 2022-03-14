    <footer class="footer-area section_gap">
        <div class="container">
          <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 single-footer-widget">
            <?php dynamic_sidebar('footer-1'); ?>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 single-footer-widget">
            <?php dynamic_sidebar('footer-2'); ?>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 single-footer-widget">
            <?php dynamic_sidebar('footer-3'); ?>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 single-footer-widget">
            <?php dynamic_sidebar('footer-4'); ?>
            </div>
    
          </div>
          <div class="footer-bottom row align-items-end">
            <div class="footer-text m-0 col-lg-8 col-md-12">
              <?php the_field('copyright_text', 'options'); ?>
            
            </div>
            <div class="col-lg-4 col-md-12 footer-social text-right">
            <?php if ($ficons=get_field('footer_social_icons', 'options')) {
    foreach ($ficons as $ficon) { ?>
<a href="<?php echo $ficon['icon_link']; ?>"><i class="fa <?php echo $ficon['social_icon']; ?>"></i></a>
<?php }
} ?>
             
            </div>
          </div>
        </div>
      </footer>
    <!--================ End footer Area  =================-->


    <?php wp_footer(); ?>
</body>

</html>