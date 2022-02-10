<?php
function stack_theme_setup(){
    load_theme_textdomain('stack', get_template_directory_uri().'/languages');
    add_theme_support( 'title-tag');
    add_theme_support( 'post-thumbnails', array('post', 'page', 'team', 'testimonial','client'));
    add_image_size( 'post-thumbnail', 350, 250, true );
    add_image_size( 'single-post-thumbnail', 1920, 450, true );
    add_image_size( 'team-image-size', 420, 290, true );

    register_nav_menus( array(
        'primary_menu'=> 'Primary Menu',
    ) );

    $logo_width  = 300;
    $logo_height = 100;

    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );

}
add_action('after_setup_theme', 'stack_theme_setup' );