
<section id="pricing" class="section-padding bg-gray">
<div class="container">
<div class="section-header text-center">
<h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">
    <?php global $stack_demo; echo esc_html($stack_demo['Pricing_title']); ?></h2>
<p><?php echo esc_html($stack_demo['pricing_subtitle']); ?></p>
</div>
<div class="row">
<?php $args=array(
    'post_type'=> 'pricing',
    'posts_per_page'=>'3',
    'order'=>'ASC'
);
$query=new WP_Query($args);
while($query->have_posts()){ 
    $query->the_post(  );
    ?>


<div class="col-lg-4 col-md-6 col-xs-12">
    <div class="table wow fadeInLeft" data-wow-delay="1.2s">
        <div class="title">
            <h3><?php echo esc_html(the_title()); ?></h3>
        </div>
        <div class="pricing-header">
        <?php if( get_field('package_price') ){?>
            <p class="price-value"><?php esc_html(the_field('package_price')); ?>
                <span>/ Month</span>
            </p>
            <?php } ?>
        </div>
        <ul class="description">

        <?php if(get_field('package_feature_1')){ ?>
            <li><?php esc_html(the_field('package_feature_1')); ?></li>
         <?php }?>

         <?php if(get_field('package_feature_1')){ ?>
            <li><?php esc_html(the_field('package_feature_2')); ?></li>
        <?php }?>

        <?php if(get_field('package_feature_1')){ ?>
        <li><?php esc_html(the_field('package_feature_3')); ?></li>
        <?php }?>
         
 <?php if(get_field('package_feature_1')){ ?>
 <li><?php esc_html(the_field('package_feature_4')); ?></li>
 <?php }?>
  
 <?php if(get_field('package_feature_1')){ ?>
 <li><?php esc_html(the_field('package_feature_5')); ?></li>
 <?php }?>
  
 <?php if(get_field('package_feature_1')){ ?>
 <li><?php esc_html(the_field('package_feature_6')); ?></li>
 <?php }?>
     
        
        </ul>
        <?php if(get_field('button_text')){?>
        <a href="<?php esc_url(the_field('button_link')); ?>" class="btn btn-common"><?php esc_html(the_field('button_text')); ?></a>
        <?php } ?>
    </div>
</div>
<?php } ?>
</div>
</div>
</section>
<!-- Pricing Table Section End -->

<div class="skill-area section-padding">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">

    <img class="img-fluid" src="<?php echo esc_attr( $stack_demo['skill_Image']['url']); ?>">
</div>
<div
    class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight"
    data-wow-delay="0.3s">
    <div class="site-heading">
        <h2 class="section-title"><?php echo esc_html($stack_demo['skill_title']); ?>

        </h2>
        <p>
            <?php echo esc_html($stack_demo['skill_subtitle']); ?>
        </p>
    </div>

      <div class="skills-section">
              <!-- Progress Bar Start -->
              <div class="progress-box">
                <h5>Strategy &amp; Analysis <span class="pull-right">88%</span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="87" style="width: 87%;"></div>
                </div>
              </div>
              <div class="progress-box">
                <h5>Eeconomic growth <span class="pull-right">95%</span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="96" style="width: 96%;"></div>
                </div>
              </div>
              <div class="progress-box">
                <h5>Achieves goals <span class="pull-right">70%</span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="52" style="width: 52%;"></div>
                </div>
              </div>
              <!-- End Progressbar -->

        <!-- End Progressbar -->
    </div>
</div>
</div>
</div>
</div>