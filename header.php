
<!DOCTYPE html>
<html lang="<?php language_attributes(  ); ?>" class="no-js">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php wp_head(); ?>
  </head>
  <body <?php body_class(  )?>>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="<?php echo esc_url(home_url())?>" class="navbar-brand"><?php  the_custom_logo(  ) ?></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <?php wp_nav_menu( array( 'menu' => 'primary_menu', 
          'theme_location'=>'primary_menu',
           'container'=> 'div', 
           'container_id'=>'navbarCollapse',
          'container_class'=> 'collapse navbar-collapse', 
          'menu_id'=> false,
           'menu_class'=> 'navbar-nav mr-auto w-100 justify-content-end clearfix', 
           'depth'=> 2, 
           'fallback_cb'=> 'bs4navwalker::fallback', 
           'walker'=> new bs4navwalker(), ) ); 
           ?>
        </div>
      </nav>
      <!-- Navbar End -->
