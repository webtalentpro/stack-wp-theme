<section id="portfolios" class="section-padding">
<!-- Container Starts -->
<div class="container">
<div class="section-header text-center">
<h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Works</h2>
<p>A desire to help and empower others between community contributors in technology
    <br>
    began to grow in 2020.</p>
</div>

<!-- Portfolio Recent Projects -->
<div id="portfolio" class="row">

<?php $args=array(
    'post_type'=> 'works',
    'posts_per_page'=>'6',
    'order'=>'ASC'
);
$query=new WP_Query($args);
while($query->have_posts()){ 
    $query->the_post(  );
    ?>
<div class="col-lg-4 col-md-6 col-xs-12 mix development print">
    <div class="portfolio-item">
        <div class="shot-item">
        <?php $first_image=get_field('first_image'); 
            $first_image2=get_field('second_image'); ?>
          <?php if($first_image){?>
            <img src="<?php echo $first_image['url'];?>"/>
            <?php } ?>
            <div class="single-content">
                <div class="fancy-table">
                    <div class="table-cell">
                        <div class="zoom-icon">
                        <?php if($first_image2){?>
                            <a class="lightbox" href="<?php echo $first_image2['url'];?>">
                                <i class="lni-eye item-icon"></i>
                            </a>
                            <?php } ?>
                        </div>
                        <a href="#"><?php the_title() ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>
</div>
</div>
<!-- Container Ends -->
</section>
<!-- Portfolio Section Ends -->
