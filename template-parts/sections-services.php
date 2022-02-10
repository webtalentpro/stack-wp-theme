<section id="services" class="section-padding bg-gray">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php global $stack_demo; echo esc_html($stack_demo['service_title']); ?></h2>
            <p>
                <?php echo esc_html($stack_demo['service_subtitle'])?>

            </p>
        </div>
        <div class="row">
            <!-- Services item -->

           
            <?php $args=array(
     'post_type'=> 'services',
     'posts_per_page'=>'6',
     'order'=>'ASC'
 );
 $query=new WP_Query($args);
 while($query->have_posts()){ 
     $query->the_post(  );
     ?>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon">
                    <?php if( class_exists('ACF')){
                        $serv_icon=get_field('fontawesome_icon');
                    } ?>
                        <i class="fa <?php echo $serv_icon; ?>"></i>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="#"><?php the_title();?></a>
                        </h3>
                        <p>
                            <?php the_content();;?>
                        </p>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Start Video promo Section -->
<section class="video-promo section-padding" style="background-image:url(<?php echo esc_attr($stack_demo['video_back_image']['background-image']); ?>);background-color:<?php echo $stack_demo['video_back_image']['background-color']; ?>; background-size:cover; background-position:center center;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="video-promo-content text-center wow fadeInUp" data-wow-delay="0.3s">
                    <a
                        href="<?php echo esc_url($stack_demo['video_link']); ?>"
                        class="video-popup">
                        <i class="lni-film-play"></i>
                    </a>
                    <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
                        <?php echo esc_html($stack_demo['video_title']); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>