<?php


function stack_sidebar_wigets(){
    register_sidebar( array(

        'name'=>__('Sidebar Widget', 'stack'),
        'id'=>'widget-1',
        'before_widget'=> '<div class="tags categories single-widget">',
        'after_widget'=> '</div>',
        'before_title'=> '<h4>',
        'after_title'=> '</h4>',

    ) );


}
add_action('widgets_init', 'stack_sidebar_wigets' );