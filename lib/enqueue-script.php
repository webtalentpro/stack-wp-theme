<?php
function kirki_all_css_js(){
    wp_enqueue_style( 'stylesheet', get_stylesheet_directory(  ) );
    wp_enqueue_style('bootstrap', get_template_directory_uri(  ). '/assets/css/bootstrap.min.css', array(), '4.1.1', 'all' );
    wp_enqueue_style('animate', get_template_directory_uri(  ). '/assets/css/animate.css', array(), '5.9', 'all' );
    wp_enqueue_style('magni', get_template_directory_uri(  ). '/assets/css/magnific-popup.css', array(), '1.1.0', 'all' );
    wp_enqueue_style('lightbox', get_template_directory_uri(  ). '/assets/css/nivo-lightbox.css', array(), '1.3.1', 'all' );
    wp_enqueue_style('owl', get_template_directory_uri(  ). '/assets/css/owl.carousel.min.css', array(), '2.3.3', 'all' );
    wp_enqueue_style('owl-theme', get_template_directory_uri(  ). '/assets/css/owl.theme.css', array(), '2.3.3', 'all' );
    wp_enqueue_style('responsive', get_template_directory_uri(  ). '/assets/css/responsive.css', array(), '5.9', 'all' );
    wp_enqueue_style('slicknav', get_template_directory_uri(  ). '/assets/css/slicknav.css', array(), '1.0.3', 'all' );
    wp_enqueue_style('main', get_template_directory_uri(  ). '/assets/css/main.css', array(), '5.9', 'all' );
    wp_enqueue_style('line-icons', get_template_directory_uri(  ). '/assets/fonts/line-icons.css', array(), '4.0', 'all' );



    // js file

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('bootstrap', get_template_directory_uri(  ). '/assets/js/bootstrap.min.js', array(), '4.1.1', true );
    wp_enqueue_script('counter', get_template_directory_uri(  ). '/assets/js/jquery.counterup.min.js', array(), '4.0', true );
    wp_enqueue_script('easing', get_template_directory_uri(  ). '/assets/js/jquery.easing.min.js', array(), '4.0', true );
    wp_enqueue_script('popup', get_template_directory_uri(  ). '/assets/js/jquery.magnific-popup.min.js', array(), '1.1.0', true );
    wp_enqueue_script('mix', get_template_directory_uri(  ). '/assets/js/jquery.mixitup.js', array(), '4.0', true );
    wp_enqueue_script('nav', get_template_directory_uri(  ). '/assets/js/jquery.nav.js', array(), '4.0', true );
    wp_enqueue_script('slicknav', get_template_directory_uri(  ). '/assets/js/jquery.slicknav.js', array(), '1.0.3', true );
    wp_enqueue_script('vade', get_template_directory_uri(  ). '/assets/js/jquery.vide.js', array(), '0.5.1', true );
    wp_enqueue_script('main', get_template_directory_uri(  ). '/assets/js/main.js', array(), '4.0', true );
    wp_enqueue_script('nivo', get_template_directory_uri(  ). '/assets/js/nivo-lightbox.js', array(), '1.3.1', true );
    wp_enqueue_script('carousel', get_template_directory_uri(  ). '/assets/js/owl.carousel.min.js', array(), '2.3.3', true );
    wp_enqueue_script('popper', get_template_directory_uri(  ). '/assets/js/popper.min.js', array(), '4.0', true );
    wp_enqueue_script('scrolling', get_template_directory_uri(  ). '/assets/js/scrolling-nav.js', array(), '4.0.2', true );
    wp_enqueue_script('waypoint', get_template_directory_uri(  ). '/assets/js/waypoints.min.js', array(), '2.0.3', true );
    wp_enqueue_script('wow', get_template_directory_uri(  ). '/assets/js/wow.js', array(), '4.0', true );
    

}
add_action( 'wp_enqueue_scripts', 'kirki_all_css_js');