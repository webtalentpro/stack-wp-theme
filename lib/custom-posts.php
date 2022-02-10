<?php


function stack_custom_post(){
    // feature items
    register_post_type('features', array(
        'labels'=>array(
            'name'=>'Features',
            'singular_name'=> 'Feature',
            'add_new'=> 'New Feature',
            'add_new_item'=> 'New Feature item',
            'new_item'=> ' New Feature',
            'view_item'=> 'View Feature',
            'edit_item'=> 'Edit Feature',
        ),
        'menu_icon'=> 'dashicons-superhero-alt',
        'menu_position'=>6,
        'public'=> true,
        'publicly_queryable'=> true,
        'show_ui'=> true,
        'exclude_from_search'=> true,
        'has_archive'=> true,
        'hierarchial'=> true,
        'capability_type'=> 'post',
        'rewrite'=>array('slag'=> 'features'),
        'supports'=>array('title', 'editor'),
    ));

    // service items
register_post_type('services', array(
    'labels'=>array(
        'name'=>'Services',
        'singular_name'=> 'Service',
        'add_new'=> 'New Service',
        'add_new_item'=> 'New Service item',
        'new_item'=> ' New Service',
        'view_item'=> 'View Service',
        'edit_item'=> 'Edit Service',
    ),
    'menu_icon'=> 'dashicons-edit-page',
    'menu_position'=>7,
    'public'=> true,
    'publicly_queryable'=> true,
    'show_ui'=> true,
    'exclude_from_search'=> true,
    'has_archive'=> true,
    'hierarchial'=> true,
    'capability_type'=> 'post',
    'rewrite'=>array('slag'=> 'service'),
    'supports'=>array('title', 'editor'),
));


    // Team items
    register_post_type('team', array(
        'labels'=>array(
            'name'=>'Teams',
            'singular_name'=> 'Team',
            'add_new'=> 'New Team',
            'add_new_item'=> 'New Team item',
            'new_item'=> ' New Team',
            'view_item'=> 'View Team',
            'edit_item'=> 'Edit Team',
        ),
        'menu_icon'=> 'dashicons-groups',
        'menu_position'=>8,
        'public'=> true,
        'publicly_queryable'=> true,
        'show_ui'=> true,
        'exclude_from_search'=> true,
        'has_archive'=> true,
        'hierarchial'=> true,
        'capability_type'=> 'post',
        'rewrite'=>array('slag'=> 'team'),
        'supports'=>array('title', 'thumbnail'),
    ));

      // Counter items
     register_post_type('counter', array(
    'labels'=>array(
        'name'=>'Counters',
        'singular_name'=> 'Counter',
        'add_new'=> 'New Counter',
        'add_new_item'=> 'New Counter item',
        'new_item'=> ' New Counter',
        'view_item'=> 'View Counter',
        'edit_item'=> 'Edit Counter',
    ),
    'menu_icon'=> 'dashicons-image-filter',
    'menu_position'=>9,
    'public'=> true,
    'publicly_queryable'=> true,
    'show_ui'=> true,
    'exclude_from_search'=> true,
    'has_archive'=> true,
    'hierarchial'=> true,
    'capability_type'=> 'post',
    'rewrite'=>array('slag'=> 'counter'),
    'supports'=>array('title'),
    ));

    
      // Pricing items
      register_post_type('pricing', array(
        'labels'=>array(
            'name'=>'Pricings',
            'singular_name'=> 'Pricing',
            'add_new'=> 'New Pricing',
            'add_new_item'=> 'New Pricing item',
            'new_item'=> ' New Pricing',
            'view_item'=> 'View Pricing',
            'edit_item'=> 'Edit Pricing',
        ),
        'menu_icon'=> 'dashicons-money-alt',
        'menu_position'=>11,
        'public'=> true,
        'publicly_queryable'=> true,
        'show_ui'=> true,
        'exclude_from_search'=> true,
        'has_archive'=> true,
        'hierarchial'=> true,
        'capability_type'=> 'post',
        'rewrite'=>array('slag'=> 'pricing'),
        'supports'=>array('title'),
        ));

         // Skill items
   register_post_type('works', array(
    'labels'=>array(
        'name'=>'Works',
        'singular_name'=> 'Work',
        'add_new'=> 'New Work',
        'add_new_item'=> 'New Work item',
        'new_item'=> ' New Work',
        'view_item'=> 'View Work',
        'edit_item'=> 'Edit Work',
    ),
    'menu_icon'=> 'dashicons-portfolio',
    'menu_position'=>12,
    'public'=> true,
    'publicly_queryable'=> true,
    'show_ui'=> true,
    'exclude_from_search'=> true,
    'has_archive'=> true,
    'hierarchial'=> true,
    'capability_type'=> 'post',
    'rewrite'=>array('slag'=> 'work'),
    'supports'=>array('title', 'thumbnail'),
    ));

// Testimonial
    register_post_type('testimonial', array(
        'labels'=>array(
            'name'=>'Testimonials',
            'singular_name'=> 'Testimonial',
            'add_new'=> 'New Testimonial',
            'add_new_item'=> 'New Testimonial item',
            'new_item'=> ' New Testimonial',
            'view_item'=> 'View Testimonial',
            'edit_item'=> 'Edit Testimonial',
        ),
        'menu_icon'=> 'dashicons-testimonial',
        'menu_position'=>13,
        'public'=> true,
        'publicly_queryable'=> true,
        'show_ui'=> true,
        'exclude_from_search'=> true,
        'has_archive'=> true,
        'hierarchial'=> true,
        'capability_type'=> 'post',
        'rewrite'=>array('slag'=> 'testimonial'),
        'supports'=>array('title', 'editor','thumbnail'),
        ));

        // Brands
    register_post_type('client', array(
        'labels'=>array(
            'name'=>'Clients',
            'singular_name'=> 'Client',
            'add_new'=> 'New Client',
            'add_new_item'=> 'New Client item',
            'new_item'=> ' New Client',
            'view_item'=> 'View Client',
            'edit_item'=> 'Edit Client',
        ),
        'menu_icon'=> 'dashicons-images-alt',
        'menu_position'=>14,
        'public'=> true,
        'publicly_queryable'=> true,
        'show_ui'=> true,
        'exclude_from_search'=> true,
        'has_archive'=> true,
        'hierarchial'=> true,
        'capability_type'=> 'post',
        'rewrite'=>array('slag'=> 'client'),
        'supports'=>array('title','thumbnail'),
        ));
        
    

}
add_action( 'init', 'stack_custom_post' );