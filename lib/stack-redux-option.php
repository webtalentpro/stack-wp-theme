

<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'stack_demo';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Stack Options', 'stack' ),
        'customizer'           => true,
    );

    Redux::setArgs( $opt_name, $args );


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Hero section', 'stack' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
		'fields'=>array(
			array(
				'title'=>__('Hero Title ', 'stack'),
				'id'=> 'hero_title',
				'type'=> 'text',
				'default'=> 'We Discover & Build Digital of Businesses'

			), 
			array(
				'title'=>__('Button Text ', 'stack'),
				'id'=> 'hero_button_text',
				'type'=> 'text',
				'default'=> 'Explore'
			), 
			array(
				'title'=>__('Button Link ', 'stack'),
				'id'=> 'button_link_text',
				'type'=> 'text',
				'default'=>'https://www.google.com',
			), 

			array(
				'title'=>__('Banner Image', 'stack'),
				'id'=> 'banner_image',
				'type'=> 'media',
				'default'=>array(
					'url'=>get_template_directory_uri(  ).'/assets/img/hero-1.png',
				)
			), 

			array(
				'title'=>__('Background', 'stack'),
				'id'=> 'hero_background',
				'type'=> 'background',
				'default'=>array(
					'background-color'=> '#2d2d2d',
					'background-image'=>get_template_directory_uri(  ).'/assets/img/hero-bg.png',
					'background-size'=> 'cover',
					'background-position'=> 'center center',
					'background-attachment'=> 'scroll',
					'background-repeat'=> 'no-repeat',
				)
			), 


		)
	)
	);

// Features section
Redux::set_section($opt_name, array(
	'title'=>__('Features Section', 'stack'),
	'icon'=> 'el el-th-large',
	'id'=> 'feature_section_control',
	'fields'=>array(
		array(
			'title'=>__('Feature Title', 'stack'),
			'id'=>'feature_title',
			'type'=> 'text',
			'default'=> 'We are helping to grow <br> your business.'
		),
		array(
			'title'=>__('Feature Description', 'stack'),
			'id'=>'feature_description',
			'type'=> 'editor',
			'default'=> 'A digital studio specialising in User Experience & eCommerce, we combine innovation with digital 
craftsmanship to help brands fulfill their potential.'
		),

		array(
			'title'=>__('Button Text ', 'stack'),
			'id'=> 'feature_button_text',
			'type'=> 'text',
			'default'=> 'About More Us'
		), 
		array(
			'title'=>__('Button Link ', 'stack'),
			'id'=> 'feature_button_link',
			'type'=> 'text',
			'default'=>'https://www.google.com',
		), 
	)
		));

// Service section

// Features section
Redux::set_section($opt_name, array(
	'title'=>__('Service Section', 'stack'),
	'icon'=> 'el el-th-large',
	'id'=> 'service_section_control',
	'fields'=>array(
		array(
			'title'=>__('Service Title', 'stack'),
			'id'=>'service_title',
			'type'=> 'text',
			'default'=> 'Our Services'
		),
		array(
			'title'=>__('Service subtitle', 'stack'),
			'id'=>'service_subtitle',
			'type'=> 'text',
			'default'=> 'A desire to help and empower others between community contributors in technology began to grow in 2020. '
		),

	)
));
// Video
Redux::set_section($opt_name, array(
	'title'=>__('Video Section', 'stack'),
	'icon'=> 'el el-th-large',
	'id'=> 'video_section_control',
	'fields'=>array(
		array(
			'title'=>__('Video Title', 'stack'),
			'id'=>'video_title',
			'type'=> 'text',
			'default'=> 'Watch videos'
		),
		array(
			'title'=>__('Video Link', 'stack'),
			'id'=>'video_link',
			'type'=> 'text',
			'default'=> 'https://youtu.be/b1VV3pDsWpQ'
		),
		array(
			'title'=>__('Background Image', 'stack'),
			'id'=>'video_back_image',
			'type'=> 'background',
			'default'=>array(
				'background-image'=>get_template_directory_uri(  ).'/assets/img/bg-video.jpg',
				'background-color'=> '#fff',
			)
		),

	)
));

// Team section
Redux::set_section($opt_name, array(
	'title'=>__('Team Section', 'stack'),
	'icon'=> 'el el-th-large',
	'id'=> 'team_section_control',
	'fields'=>array(
		array(
			'title'=>__('Team Title', 'stack'),
			'id'=>'team_title',
			'type'=> 'text',
			'default'=> 'Meet our team'
		),
		array(
			'title'=>__('Team Subtitle', 'stack'),
			'id'=>'team_subtitle',
			'type'=> 'text',
			'default'=> 'A desire to help and empower others between community contributors in techno began to grow in 2020. '
		),

	)
));


// Counter section
Redux::set_section($opt_name, array(
	'title'=>__('Counter Section', 'stack'),
	'icon'=> 'el el-th-large',
	'id'=> 'counter_section_control',
	'fields'=>array(
		array(
			'title'=>__('Background Image', 'stack'),
			'id'=>'counter_back_image',
			'type'=> 'background',
			'default'=>array(
				'background-image'=>get_template_directory_uri(  ).'/assets/img/count-bg.jpg',
				'background-color'=> '#fff',
			)
		),

	)
));


// Pricing section

Redux::set_section($opt_name, array(
	'title'=>__('Pricing Section', 'stack'),
	'icon'=> 'el el-th-large',
	'id'=> 'Pricing_section_control',
	'fields'=>array(
		array(
			'title'=>__('Pricing Title', 'stack'),
			'id'=>'Pricing_title',
			'type'=> 'text',
			'default'=> 'Best Pricing'
		),
		array(
			'title'=>__('Pricing subtitle', 'stack'),
			'id'=>'pricing_subtitle',
			'type'=> 'text',
			'default'=> 'A desire to help and empower others between community contributors in technology began to grow in 2020. '
		),

	)
));
// sKill section

Redux::set_section($opt_name, array(
	'title'=>__('Skill Section', 'stack'),
	'icon'=> 'el el-th-large',
	'id'=> 'skill_section_control',
	'fields'=>array(
		array(
			'title'=>__('Skill Title', 'stack'),
			'id'=>'skill_title',
			'type'=> 'text',
			'default'=> 'Our Skill '
		),
		array(
			'title'=>__('Skill Description', 'stack'),
			'id'=>'skill_subtitle',
			'type'=> 'editor',
			'default'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus architecto laudantium dolorem, aut 
aspernatur modi minima alias provident obcaecati! Minima odio porro nemo magnam dolore minus asperiores veniam dolorum 
est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, nesciunt possimus quaerat ipsam, corporis architecto 
aspernatur non aut! Dolorum consectetur placeat excepturi, perspiciatis sunt.  '
		),
		array(
			'title'=>__('Skill Image', 'stack'),
			'id'=>'skill_Image',
			'type'=> 'media',
			'default'=>array(
				'url'=>get_template_directory_uri().'/assets/img/about/img-1.jpg',
			),
		),

	)
	));
//work section
Redux::set_section($opt_name, array(
	'title'=>__('Work Section', 'stack'),
	'icon'=> 'el el-th-large',

	'fields'=>array(
		array(
			'title'=>__('Work Title', 'stack'),
			'id'=>'work_title',
			'type'=> 'text',
			'default'=> 'Best Pricing'
		),
		array(
			'title'=>__('Work subtitle', 'stack'),
			'id'=>'work_subtitle',
			'type'=> 'text',
			'default'=> 'A desire to help and empower others between community contributors in technology began to grow in 2020. '
		),

	)
));


	Redux::set_section($opt_name, array(
		'title'=>__('Testimonial Section', 'stack'),
		'icon'=> 'el el-th-large',
		'id'=> 'testimonial_section',
		'fields'=>array(
			array(
				'title'=>__('Testimonial Background Image', 'stack'),
				'id'=>'testi_back_image',
				'type'=> 'background',
				'default'=>array(
					'background-image'=>get_template_directory_uri(  ).'/assets/img/testimonial.jpg',
					'background-color'=> '#fff',
				)
			),
			
	
		)
	));

	//contact section
	
	Redux::set_section($opt_name, array(
		'title'=>__('Contact Section', 'stack'),
		'icon'=> 'el el-th-large',
	
		'fields'=>array(
			array(
				'title'=>__('Contact Title', 'stack'),
				'id'=>'contact_title',
				'type'=> 'text',
				'default'=>'We are a friendly bunch..',		
			),
			array(
				'title'=>__('Contact Sub-Title', 'stack'),
				'id'=>'contact_subtitle',
				'type'=> 'textarea',
				'default'=>'We create projects for companies and startups with a passion for quality',		
			),
			array(
				'title'=>__('Contact Address', 'stack'),
				'id'=>'contact_address',
				'type'=> 'text',
				'default'=>'ADDRESS: 28 Green Tower, New York City, USA',		
			),
			array(
				'title'=>__('Contact Email', 'stack'),
				'id'=>'contact_email',
				'type'=> 'text',
				'default'=>'Email: contact@stuck.com',		
			),
			array(
				'title'=>__('Contact Phone', 'stack'),
				'id'=>'contact_phone',
				'type'=> 'text',
				'default'=>'Phone: +84 846 250 597',		
			),

			
	
		)
	));

		// footer section
Redux::set_section($opt_name, array(
	'title'=>__('Footer Section', 'stack'),
	'icon'=> 'el el-th-large',
	
	'fields'=>array(
		array(
			'title'=>__('Footer Logo', 'stack'),
			'id'=>'footer_logo',
			'type'=> 'media',
			'default'=>array(
				'url'=>get_template_directory_uri(  ).'/assets/img/logo.png',
			)		
		),
		array(
			'title'=>__('Facebook Link', 'stack'),
			'id'=>'footer_facebook',
			'type'=> 'text',
			'default'=>'https://www.facebook.com/webtalent-pro',		
		),
		array(
			'title'=>__('Twitter Link', 'stack'),
			'id'=>'footer_twitter',
			'type'=> 'text',
			'default'=>'https://www.twitter.com/webtalent-pro',		
		),
		array(
			'title'=>__('Instagram Link', 'stack'),
			'id'=>'footer_insta',
			'type'=> 'text',
			'default'=>'https://www.instagram.com/webtalent-pro',		
		),
		array(
			'title'=>__('Linkedin Link', 'stack'),
			'id'=>'footer_linkedin',
			'type'=> 'text',
			'default'=>'https://www.twitter.com/webtalent-pro',		
		),
		array(
			'title'=>__('Copyright Text ', 'stack'),
			'id'=>'footer_copyright',
			'type'=> 'editor',
			'default'=>'© Copyright 2022 | Designed by Aminul ',		
		),
		
	
	)
));