
<div id="feature">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="text-wrapper">
                    <div>
                        <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s"><?php global $stack_demo; echo esc_html( $stack_demo['feature_title']); ?></h2>
                        <p class="mb-4"><?php echo esc_html($stack_demo['feature_description']); ?></p>
                        <a
                            href="<?php echo esc_url($stack_demo['feature_button_link']); ?>"
                            
                            class="btn btn-common"><?php echo esc_html($stack_demo['feature_button_text']); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
                <div class="feature-thumb">
                    <?php $args=array(
                        'post_type'=> 'features',
                        'posts_per_page'=>'3',
                        'order'=>'ASC'
                    );
                    $query=new WP_Query($args);
                    while($query->have_posts()){ 
                        $query->the_post(  );
                        ?>

                    <div
                        class="feature-item wow fadeInDown"
                        data-wow-duration="1000ms"
                        data-wow-delay="300ms">
                       <?php if(  class_exists('ACF') ){
                           $fontawe_icon=get_field('fontawesome__icon');

                       }?>
                        <div class="icon">
                        <?php if( $fontawe_icon){ ?>
                            <i class="fa <?php echo $fontawe_icon; ?>"></i>
                      <?php  } ?>
                        </div>
                        <div class="feature-content">
                            <h3><?php the_title() ?></h3>
                            <p>
                                <?php the_content() ?>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</div>
</div>