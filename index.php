

<?php
/* template Name: front-page */
  get_header();

  global $stack_demo;

?>

<!-- Hero Area Start -->
<div id="hero-area" class="hero-area-bg" style="background-image:url(<?php echo esc_attr($stack_demo['hero_background']['background-image']); ?>); background-color:<?php echo $stack_demo['hero_background']['background-color']; ?>; background-size:<?php echo $stack_demo['hero_background']['background-size']; ?>; background-repeat:no-reapeat; background-attachment:<?php echo $stack_demo['hero_background']['background-attachment']; ?>">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="contents text-center">
                    <h2 class="head-title wow fadeInUp"><?php echo esc_html($stack_demo['hero_title']);?></h2>
                    <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                        <a
                            href="<?php echo esc_url($stack_demo['button_link_text']);?>"
                            
                            class="btn btn-common"><?php echo esc_html($stack_demo['hero_button_text']);?></a>
                    </div>
                </div>
                <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                    <img
                        class="img-fluid"
                        src="<?php echo esc_attr($stack_demo['banner_image']['url']);?>"

                        alt="">
                        
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

</header>

<?php get_template_part('template-parts/section', 'feature'); ?>
<?php get_template_part('template-parts/sections', 'services'); ?>
<?php get_template_part('template-parts/section', 'team'); ?>
<?php get_template_part('template-parts/section', 'pricing'); ?>
<?php get_template_part('template-parts/section', 'work'); ?>
<?php get_template_part('template-parts/section', 'testimonial'); ?>
<?php get_template_part('template-parts/section', 'blog'); ?>
<?php get_template_part('template-parts/section', 'contact'); ?>


<?php get_footer( ); ?>