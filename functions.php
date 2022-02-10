<?php

// scripts file link
require_once('lib/enqueue-script.php');

// Boostrap nav walker
require_once('lib/bs4navwalker.php');

// sidebar widget
require_once('lib/widgets.php');

// theme default function
require_once('lib/default.php');



//stack customizer
require_once('lib/stack-redux-option.php');


// tgm plugin config file
require_once('lib/class-tgm-plugin-activation.php');

// Plugin require file 
require_once('lib/theme_activation.php');


// Demo import file
require_once('lib/stack-demo-import-config.php');




function stack_excerpt_more($more){
    global $post;
    return '<br> <br> <a class="btn btn-common btn-rm" href="'.get_permalink( $post->ID ).'"> '. 'Read More' . '</a>';

}
add_action( 'excerpt_more', 'stack_excerpt_more');

function stack_excerpt_length($length){
    return 20;
}
add_action( 'excerpt_length', 'stack_excerpt_length');
