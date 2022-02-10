<section id="testimonial" class="testimonial section-padding" style="background-image:url(<?php echo esc_attr($stack_demo['video_back_image']['background-image']); ?>);background-color:<?php echo $stack_demo['video_back_image']['background-color']; ?>; background-size:cover; background-position:center center;">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
    <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
      
      
              
<?php $args=array(
    'post_type'=> 'testimonial',
    'posts_per_page'=>'4',
    'order'=>'ASC'
);
$query=new WP_Query($args);
while($query->have_posts()){ 
    $query->the_post(  );
    ?>

        <div class="item">
            <div class="testimonial-item">
                <div class="img-thumb">
             <?php echo the_post_thumbnail(  ); ?>
                  
                </div>
                <div class="info">
                    <h2>
                        <a href="#"><?php the_title() ?></a>
                    </h2>
                    <?php if(get_field('company_name')){?>
                    <h3>
                        <a href="#"><?php the_field('company_name') ?></a>
                    </h3>
                    <?php } ?>
                </div>
                <div class="content">
                    <p class="description"><?php the_content() ?>      
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Testimonial Section End -->