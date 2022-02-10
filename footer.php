  <!-- Copyright Section Start -->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-3 col-xs-12">
          <div class="footer-logo">
         
            <img src="<?php global $stack_demo; echo esc_attr( $stack_demo['footer_logo']['url']); ?>">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">     
          <div class="social-icon text-center">
            <a class="facebook" href="<?php echo esc_url ($stack_demo['footer_facebook']); ?>"><i class="lni-facebook-filled"></i></a>
            <a class="twitter" href="<?php echo esc_url( $stack_demo['footer_twitter']); ?>"><i class="lni-twitter-filled"></i></a>
            <a class="instagram" href="<?php echo esc_url( $stack_demo['footer_insta']); ?>"><i class="lni-instagram-filled"></i></a>
            <a class="linkedin" href="<?php echo esc_url( $stack_demo['footer_linkedin']); ?>"><i class="lni-linkedin-filled"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-xs-12">
          <p class="float-right"><?php echo esc_html( $stack_demo['footer_copyright']); ?></p>
        </div> 
      </div>
    </div>
  </div>
  <!-- Copyright Section End -->
  <!-- Go to Top Link -->
  <a href="#" class="back-to-top">
  	<i class="lni-arrow-up"></i>
  </a>
  
  <!-- Preloader -->
  <div id="preloader">
    <div class="loader" id="loader-1"></div>
  </div>
  <!-- End Preloader -->
  <?php wp_footer(); ?>
    
</body>
</html>