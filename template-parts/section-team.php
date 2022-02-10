<section id="team" class="section-padding text-center">
<div class="container">
<div class="section-header text-center">
    <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">
        <?php global $stack_demo; echo esc_html( $stack_demo['team_title']) ; ?></h2>
    <p>
        <?php echo esc_html($stack_demo['team_subtitle'] ) ; ?>
    </p>
</div>
<div class="row">
<?php $args=array(
    'post_type'=> 'team',
    'posts_per_page'=>'4',
    'order'=>'ASC'
);
$query=new WP_Query($args);
while($query->have_posts()){ 
    $query->the_post(  );
    ?>
    

    <div class="col-sm-6 col-md-6 col-lg-3">
        <!-- Team Item Starts -->
        <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
            <div class="team-img">

            <?php echo the_post_thumbnail('team-image-size')?>
     

                <div class="team-overlay">
                    <div class="overlay-social-icon text-center">
                        <ul class="social-icons">
                            <li> 
                            <?php if(get_field('facebook_link')){?>
                                <a href="<?php  esc_url(the_field('facebook_link') ) ; ?>">
                                    <i class="lni-facebook-filled" aria-hidden="true"></i>
                                </a>
                                <?php } ?>
                            </li>
                            <li>
                            <?php if(get_field('linkedin_link')){?>
                                <a href="<?php echo esc_url( the_field('linkedin_link') ) ; ?>">
                                    <i class="lni-twitter-filled"></i>
                                </a>
                                <?php } ?>
                            </li>
                            <li>
                            <?php if(get_field('twitter_link')){?>
                                <a href="<?php echo  esc_url(the_field('twitter_link') )?>">
                                    <i class="lni-instagram-filled"></i>
                                </a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="info-text">
                <h3>
                    <a href="#"><?php the_title() ?></a>
                </h3>
                <?php if(get_field('degignation')){?>
                <p><?php esc_html(the_field('degignation')); ?></p>
                <?php } ?>
            </div>
        </div>
        <!-- Team Item Ends -->
    </div>
    <?php } ?>
</div>

</div>
</div>
</section>


<!-- Counter Section Start -->
<section id="counter" class="section-padding" style="background-image:url(<?php echo esc_attr($stack_demo['counter_back_image']['background-image']); ?>); background-color:<?php echo $stack_demo['counter_back_image']['background-color']; ?>; background-size:cover; background-position:center center;">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-between">
<div class="col-lg-12 col-md-12 col-xs-12">
    <div class="row">
        <!-- Start counter -->
        
<?php $args=array(
    'post_type'=> 'counter',
    'posts_per_page'=>'4',
    'order'=>'ASC'
);
$query=new WP_Query($args);
while($query->have_posts()){ 
    $query->the_post(  );
    ?>

        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="counter-box wow fadeInUp" data-wow-delay="0.2s">
            
            <?php if(get_field('icon')){?>
                <div class="icon-o">
                    <i class="fa <?php esc_attr(the_field('icon')); ?>"></i>
                </div>
                <?php } ?>

                <div class="fact-count">
                    <h3>
                        <span class="counter"><?php  esc_html(the_title()); ?></span>
                    </h3>

                    <?php if(get_field('sub_title')){?>
                    <p><?php  esc_html( the_field('sub_title')); ?></p>
                    <?php } ?>

                </div>
            </div>
        </div>
        <?php } ?>
        <!-- End counter -->
    </div>
</div>
</div>
</div>
</section>
<!-- Counter Section End -->
