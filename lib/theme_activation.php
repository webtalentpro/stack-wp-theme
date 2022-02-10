<?php
function stack_theme_register_required_plugins(){

    $plugins = array(
        array(
            'name'=>__('Redux Framework','stack'),
            'slug'=> 'redux-framework',
            'required'=> true,
        ),
        array(
            'name'=>__('Contact Form 7','stack'),
            'slug'=> 'contact-form-7',
            'required'=> true,
        ),
        array(
            'name'=>__('One Click Demo Import','stack'),
            'slug'=> 'one-click-demo-import',
            'required'=> true,
        ),

        array(
            'name'=>__('Widget Import & Export','stack'),
            'slug'=> 'widget-importer-exporter',
            'required'=> true,
        ),
      
        array(
            'name'=>__('Customizer Export/Import','stack'),
            'slug'=> 'customizer-export-import',
            'required'=> true,
        ),
        array(
            'name'=>__('Advanced Custom Fields','stack'),
            'slug'=> 'advanced-custom-fields',
            'required'=> true,
        ),
        array(
            'name'=>__('Advanced Custom Fields: Font Awesome Field','stack'),
            'slug'=> 'advanced-custom-fields-font-awesome',
            'required'=> true,
        ),
        array(
            'name'=>__('Stack Custom Post','stack'),
            'slug'=> 'stack-custom-post',
            'source'=> get_stylesheet_directory().'/plugins/stack-custom-post.zip',
            'required'=> true,
        ),                    


    );

    $config= array(
        'id'=> 'stack-plugin-active',
        'menu'=> 'Stack Plugins Activation',
        'parent_slug'=> 'themes.php',
        'has_notices'=> true,

    );
    tgmpa( $plugins, $config );

}

add_action( 'tgmpa_register', 'stack_theme_register_required_plugins' );