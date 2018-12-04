<?php 
    ob_start();
	//register resources

	function register_resources(){

		//register a menu
		register_nav_menu('main-menu','Main Menu');


		//register a section
		$arg = array(
			'labels' => array(
				'name'=> 'Sections',
				'singular_name' => 'Section',
				'menu_name' => 'Sections'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);

		$arg2 = array(
			'labels' => array(
				'name'=> 'Services',
				'singular_name' => 'Service',
				'menu_name' => 'Services'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		$arg3 = array(
			'labels' => array(
				'name'=> 'Products',
				'singular_name' => 'Product',
				'menu_name' => 'Products'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		$arg4 = array(
			'labels' => array(
				'name'=> 'Portfolio',
				'singular_name' => 'Portfolio',
				'menu_name' => 'Portfolio'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('section',$arg);
		register_post_type('service',$arg2);
		register_post_type('product',$arg3);
		register_post_type('portfolio',$arg4);



		$arg5 = array(
			'label' => 'Type',
			'rewrite' => array( 'slug' => 'type' ),
			'hierarchical' => true,
		);
		register_taxonomy('type','product',$arg5);


		


	}

	add_action('init','register_resources');

	//menu items hooks

	function add_menu_li_class($classes,$item,$args){
		$classes[] = 'nav-item';
		return $classes;
	}
	add_filter('nav_menu_css_class','add_menu_li_class',10,3);

	function add_menu_anchor_class($attrs,$item,$args){
		$attrs['class'] = 'nav-link';
		return $attrs;
	}
	add_filter('nav_menu_link_attributes','add_menu_anchor_class',10,3);

	//Customiser bits-----------


	function mytheme_customize_register( $wp_customize ) {
   		//All our sections, settings, and controls will be added here

   		$wp_customize->add_section( 'section_colors' , array(
		    'title'      => 'Theme Settings',
		    'priority'   => 30,
		) );

		$wp_customize->add_setting( 'main_color_setting' , array(
		    'default'   => '#033332',
		    'transport' => 'refresh',
		) );


		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color_control', array(
			'label'      => 'Main Color',
			'section'    => 'section_colors',
			'settings'   => 'main_color_setting',
		) )

	);


		//----- image upload---

		$wp_customize->add_setting('hero_setting',
	        array(
		    	'transport'			=> 'refresh',
		    	'default' => '',
	        	// 'sanitize_callback' => 'esc_raw_url',
	        )
	    );

		$wp_customize->add_control(
	       	new WP_Customize_Image_Control(
	           	$wp_customize,'hero_setting_control',
	           	array(
	               'label'      => 'Home Hero Image',
	               'section'    => 'section_colors',
	               'settings'   => 'hero_setting',
	               // 'context'    => 'your_setting_context' 
	           	)
	       	)
	   	);

	   	$wp_customize->add_setting('producthero_setting',
	        array(
		    	'transport'			=> 'refresh',
		    	'default' => '',
	        	// 'sanitize_callback' => 'esc_raw_url',
	        )
	    );

	   	$wp_customize->add_control(
	       	new WP_Customize_Image_Control(
	           	$wp_customize,'producthero_setting_control',
	           	array(
	               'label'      => 'Product Hero Image',
	               'section'    => 'section_colors',
	               'settings'   => 'producthero_setting',
	               // 'context'    => 'your_setting_context' 
	           	)
	       	)
	   	);

	   	$wp_customize->add_setting('contacthero_setting',
	        array(
		    	'transport'			=> 'refresh',
		    	'default' => '',
	        	// 'sanitize_callback' => 'esc_raw_url',
	        )
	    );

	   	$wp_customize->add_control(
	       	new WP_Customize_Image_Control(
	           	$wp_customize,'contacthero_setting_control',
	           	array(
	               'label'      => 'Contact Hero Image',
	               'section'    => 'section_colors',
	               'settings'   => 'contacthero_setting',
	               // 'context'    => 'your_setting_context' 
	           	)
	       	)
	   	);

	   	$wp_customize->add_setting('newshero_setting',
	        array(
		    	'transport'			=> 'refresh',
		    	'default' => '',
	        	// 'sanitize_callback' => 'esc_raw_url',
	        )
	    );

	   	$wp_customize->add_control(
	       	new WP_Customize_Image_Control(
	           	$wp_customize,'newshero_setting_control',
	           	array(
	               'label'      => 'News Hero Image',
	               'section'    => 'section_colors',
	               'settings'   => 'newshero_setting',
	               // 'context'    => 'your_setting_context' 
	           	)
	       	)
	   	);



	}
	add_action( 'customize_register', 'mytheme_customize_register' );

	function mytheme_customize_css()
	{

	    ?>
	        <style type="text/css">
	            .footer, .navbar.fixed, .navbar-collapse { 
	            	background-color: <?php echo get_theme_mod('main_color_setting');?> !important; 
	            }
	           
	            .home {
	            		background-image: url(<?php echo get_theme_mod('hero_setting');?>) !important;
	            }

	            .products {
	            		background-image: url(<?php echo get_theme_mod('producthero_setting');?>) !important;
	            }

	            .contact {
	            		background-image: url(<?php echo get_theme_mod('contacthero_setting');?>) !important;
	            }

	             .news {
	            		background-image: url(<?php echo get_theme_mod('newshero_setting');?>) !important;
	            }

	        </style>
	    <?php
	}
	add_action( 'wp_head', 'mytheme_customize_css');	
 ?>



