
<!-- Contact Section Start -->
<section id="contact" class="section-padding">
<div class="container">
<div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
<div class="col-md-6 col-lg-6 col-sm-12">
    <div class="contact-block">
      
            <?php echo do_shortcode( '[contact-form-7 id="705" title="stack contact form"]' ); ?>
       
    </div>
</div>
<div class="col-md-6 col-lg-6 col-sm-12">
    <div class="contact-right-area wow fadeIn">
        <div class="contact-title">
            <h1><?php global $stack_demo; echo esc_html($stack_demo['contact_title']); ?></h1>
            <p><?php echo esc_html($stack_demo['contact_subtitle']); ?></p>
        </div>
        <h2>Contact Us</h2>
        <div class="contact-right">
            <div class="single-contact">
                <div class="contact-icon">
                    <i class="lni-map-marker"></i>
                </div>
                <p><?php echo esc_html($stack_demo['contact_address']); ?></p>
            </div>
            <div class="single-contact">
                <div class="contact-icon">
                    <i class="lni-envelope"></i>
                </div>
                <p>
                    <a href="#"><?php echo esc_html($stack_demo['contact_email']); ?></a>
                </p>
            </div>
            <div class="single-contact">
                <div class="contact-icon">
                    <i class="lni-phone-handset"></i>
                </div>
                <p>
                    <a href="#"><?php echo esc_html($stack_demo['contact_phone']); ?></a>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>