<?php if(is_front_page()) {
  get_header();
}
else{
  get_header('blog');
} ?>

<!-- Page header Start -->
<section class="page-header">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper text-center">
                    <h2><?php single_post_title( )?></h2>
                    <p>
                        <a href="<?php echo esc_url( home_url( ));?>">Home
                        </a>/<?php single_post_title();?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page header End -->

<!-- Blog Section Start  -->
<div id="blog-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="blog-post">
                    <div class="post-thumb">
                        <?php echo the_post_thumbnail( 'single-post-thumbnail'); ?>
                    </div>
                    <div class="post-content">
                        <h3><?php the_title();?></h3>
                        <?php the_content();?>
                    </div>
                </div>
                <div class="blog-comment">
                

                <?php
                        if(comments_open()) {
                            comments_template();
                        }
                    ?>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12">
                <div class="widgets">
                <?php dynamic_sidebar( 'widget-1' );?>
                </div>
            
        </div>
    </div>
</div>
</div>
<!-- Blog Section End  --
    <!-- Go to Top Link -->
<a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
</a>

<!-- End Preloader -->

<?php get_footer() ?>