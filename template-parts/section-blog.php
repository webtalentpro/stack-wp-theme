<!-- Blog Section -->
<section id="blog" class="section-padding">
<!-- Container Starts -->
<div class="container">
<div class="section-header text-center">
<h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Latest blog</h2>
<p>A desire to help and empower others between community contributors in technology
    <br>
    began to grow in 2020.</p>
</div>
<div class="row">
<?php $args=array(
  'posts_per_page'=> 3,
  'post_type'=> 'post'
);
$query=new WP_Query($args);
while($query->have_posts(  )){
  $query->the_post(  );
  ?>

<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
    <!-- Blog Item Starts -->
    <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
        <div class="blog-item-img">
            <a href="single-post.html">
               
               <?php echo the_post_thumbnail('post-thumbnail' ); ?>
               
            </a>
        </div>
        <div class="blog-item-text">
            <h3>
                <a href="<?php the_permalink(  ); ?>"><?php the_title();?></a>
            </h3>
           
           <?php the_excerpt(  );?>
          
        </div>
    </div>
    <!-- Blog Item Wrapper Ends-->
</div>
<?php } wp_reset_postdata(  ); ?>
</div>
</div>
</section>
<!-- blog Section End -->

<!-- Clients Section Start -->
<div id="clients" class="section-padding bg-gray">
<div class="container">
<div class="section-header text-center">
<h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">NOTABLE CLIENTS</h2>
<p>Over the last 20 years, we have helped and guided organisations to achieve
    outstanding results</p>
</div>
<div class="row text-align-">

<?php $args=array(
  'posts_per_page'=> 4,
  'post_type'=> 'client'
);
$query=new WP_Query($args);
while($query->have_posts(  )){
  $query->the_post(  );
  ?>


<div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
    <div class="client-item-wrapper">
   
        
        <?php echo the_post_thumbnail( ); ?>
           
           
    </div>
</div>
<?php } ?>
</div>
</div>
</div>