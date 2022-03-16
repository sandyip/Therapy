<?php 
	function therapy_style(){
		wp_register_style('custom_css' , get_template_directory_uri() . '/style.css');
		wp_enqueue_style('custom_css');

		wp_register_style('bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap');

		wp_register_style('animate' , get_template_directory_uri() . '/assets/css/animate.min.css');
		wp_enqueue_style('animate');

		wp_register_style('meanmenu' , get_template_directory_uri() . '/assets/css/meanmenu.css');
		wp_enqueue_style('meanmenu');

		wp_register_style('boxicons' , get_template_directory_uri() . '/assets/css/boxicons.min.css');
		wp_enqueue_style('boxicons');

		wp_register_style('flaticon' , get_template_directory_uri() . '/assets/css/flaticon.css');
		wp_enqueue_style('flaticon');

		wp_register_style('odometer' , get_template_directory_uri() . '/assets/css/odometer.min.css');
		wp_enqueue_style('odometer');

		wp_register_style('slick' , get_template_directory_uri() . '/assets/css/slick.min.css');
		wp_enqueue_style('slick');

		wp_register_style('select' , get_template_directory_uri() . '/assets/css/nice-select.min.css');
		wp_enqueue_style('custom_css');

		wp_register_style('carousel' , get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
		wp_enqueue_style('carousel');

		wp_register_style('theme' , get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
		wp_enqueue_style('theme');

		wp_register_style('magnific' , get_template_directory_uri() . '/assets/css/magnific-popup.min.css');
		wp_enqueue_style('magnific');

		wp_register_style('fancybox' , get_template_directory_uri() . '/assets/css/fancybox.min.css');
		wp_enqueue_style('fancybox');

		wp_register_style('style' , get_template_directory_uri() . '/assets/css/style.css');
		wp_enqueue_style('style');

		wp_register_style('responsive' , get_template_directory_uri() . '/assets/css/responsive.css');
		wp_enqueue_style('responsive');

	}
	add_action('wp_enqueue_scripts','therapy_style');

	function therapy_script(){
		wp_register_script('jsjquery',get_template_directory_uri(). '/assets/js/jquery.min.js',array(),1,1,1);
		wp_enqueue_script('jsjquery');

		wp_register_script('jsbootstrap',get_template_directory_uri(). '/assets/js/bootstrap.bundle.min.js',array(),1,1,1);
		wp_enqueue_script('jsbootstrap');

		wp_register_script('jsmeanmenu',get_template_directory_uri(). '/assets/js/jquery.meanmenu.js',array(),1,1,1);
		wp_enqueue_script('jsmeanmenu');

		wp_register_script('jscarousel',get_template_directory_uri(). '/assets/js/owl.carousel.min.js',array(),1,1,1);
		wp_enqueue_script('jscarousel');

		wp_register_script('jsappear',get_template_directory_uri(). '/assets/js/jquery.appear.js',array(),1,1,1);
		wp_enqueue_script('jsappear');


		wp_register_script('jsodometer',get_template_directory_uri(). '/assets/js/odometer.min.js',array(),1,1,1);
		wp_enqueue_script('jsodometer');

		wp_register_script('jsslick',get_template_directory_uri(). '/assets/js/slick.min.js',array(),1,1,1);
		wp_enqueue_script('jsslick');

		wp_register_script('jsselect',get_template_directory_uri(). '/assets/js/nice-select.min.js',array(),1,1,1);
		wp_enqueue_script('jsselect');

		wp_register_script('jsmagnific',get_template_directory_uri(). '/assets/js/jquery.magnific-popup.min.js',array(),1,1,1);
		wp_enqueue_script('jsmagnific');

		wp_register_script('jsfancybox',get_template_directory_uri(). '/assets/js/fancybox.min.js',array(),1,1,1);
		wp_enqueue_script('jsfancybox');

		wp_register_script('jsajaxchimp',get_template_directory_uri(). '/assets/js/jquery.ajaxchimp.min.js',array(),1,1,1);
		wp_enqueue_script('jsajaxchimp');

		wp_register_script('jsvalidator',get_template_directory_uri(). '/assets/js/form-validator.min.js',array(),1,1,1);
		wp_enqueue_script('jsvalidator');

		wp_register_script('jsform',get_template_directory_uri(). '/assets/js/contact-form-script.js',array(),1,1,1);
		wp_enqueue_script('jsform');

		wp_register_script('jswow',get_template_directory_uri(). '/assets/js/wow.min.js',array(),1,1,1);
		wp_enqueue_script('jswow');

		wp_register_script('jsmain',get_template_directory_uri(). '/assets/js/main.js',array(),1,1,1);
		wp_enqueue_script('jsmain');

	}
	add_action('wp_enqueue_scripts','therapy_script');

	//themesupport=============================================================
	function add_setup_theme(){
		add_theme_support('title-tag');
		add_theme_support('custom-logo');
		add_theme_support('post-thumbnails');

	}
	add_action('after_setup_theme','add_setup_theme');

	//themesupport feature image==============================================

	function therapy_features(){
		add_image_size('banner_image_1' , 1920,1000,true);

	}
	add_action('after_setup_theme','therapy_features');

	//dynamic menu part=======================================================
   
    function therapy_theme_menus(){
        register_nav_menus(array(
            "header"  => "Header Menu",
            "footer"  => "Footer Menu",
        ));
    }
    add_action("init","therapy_theme_menus");

  
	

	//slider cpt================================================================
	/*
* Creating a function to create our CPT
*/
 
function partner_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Partners', 'Post Type General Name', 'twentytwenty' ),
        'singular_name'       => _x( 'Partner', 'Post Type Singular Name', 'twentytwenty' ),
        'menu_name'           => __( 'Partners', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent Partner', 'twentytwenty' ),
        'all_items'           => __( 'All Partners', 'twentytwenty' ),
        'view_item'           => __( 'View Partner', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New Partner', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Partner', 'twentytwenty' ),
        'update_item'         => __( 'Update Partner', 'twentytwenty' ),
        'search_items'        => __( 'Search Partner', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'partner', 'twentytwenty' ),
        'description'         => __( 'Partner news and reviews', 'twentytwenty' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title',  'thumbnail' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-gallery',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'partner', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'partner_post_type', 0 );

//philosophy overlay cpt===============================================
/*
* Creating a function to create our CPT
*/
 
function philosophy_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Philosophys', 'Post Type General Name', 'twentytwenty' ),
        'singular_name'       => _x( 'Philosophy', 'Post Type Singular Name', 'twentytwenty' ),
        'menu_name'           => __( 'Philosophys', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent Philosophy', 'twentytwenty' ),
        'all_items'           => __( 'All Philosophys', 'twentytwenty' ),
        'view_item'           => __( 'View Philosophy', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New Philosophy', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Philosophy', 'twentytwenty' ),
        'update_item'         => __( 'Update Philosophy', 'twentytwenty' ),
        'search_items'        => __( 'Search Philosophy', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'philosophy', 'twentytwenty' ),
        'description'         => __( 'Philosophy news and reviews', 'twentytwenty' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-edit',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'philosophy', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'philosophy_post_type', 0 );

//Testimonial CPT===================================================

/*
* Creating a function to create our CPT
*/
 
function testimonial_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'twentytwenty' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'twentytwenty' ),
        'menu_name'           => __( 'Testimonials', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent Testimonial', 'twentytwenty' ),
        'all_items'           => __( 'All Testimonials', 'twentytwenty' ),
        'view_item'           => __( 'View Testimonial', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New Testimonial', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Testimonial', 'twentytwenty' ),
        'update_item'         => __( 'Update Testimonial', 'twentytwenty' ),
        'search_items'        => __( 'Search Testimonial', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'testimonials', 'twentytwenty' ),
        'description'         => __( 'Testimonial news and reviews', 'twentytwenty' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt',  'thumbnail', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-users',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'testimonial_post_type', 0 );


//theme customizer================================================
function therapy_customize_register($wp_customize){
    //header section

    $wp_customize-> add_section('therapy_header_section', [
        'title' => __('Header Section', 'therapy'),
        'priority' => 30,
    ]);

    
    //phone number
    $wp_customize -> add_setting('therapy_phone_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'therapy_phone_handle_input', array(
        'label' => __('Phone Number', 'therapy'),
        'section' => 'therapy_header_section',
        'settings' => 'therapy_phone_handle',
        'description' => __('please enter your phone Number'),
        
    )));

    //email address
    $wp_customize -> add_setting('therapy_email_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'therapy_email_handle_input', array(
        'label' => __('Email Address', 'therapy'),
        'section' => 'therapy_header_section',
        'settings' => 'therapy_email_handle',
        'description' => __('please enter your email address'),
        'type'         => 'email'
        
    )));

    //address
    $wp_customize -> add_setting('therapy_address_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'therapy_address_handle_input', array(
        'label' => __('Address', 'therapy'),
        'section' => 'therapy_header_section',
        'settings' => 'therapy_address_handle',
        'description' => __('please enter your address'),
        'type'      => 'textarea'
        
    )));

    //social links
    //facebook
    $wp_customize -> add_setting('therapy_facebook_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'therapy_facebook_handle_input', array(
        'label' => __('Facebook', 'therapy'),
        'section' => 'therapy_header_section',
        'settings' => 'therapy_facebook_handle',
        'description' => __('please enter your facebook Link'),
        
    )));

    //twitter
    $wp_customize -> add_setting('therapy_twitter_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'therapy_twitter_handle_input', array(
        'label' => __('Twitter Link', 'therapy'),
        'section' => 'therapy_header_section',
        'settings' => 'therapy_twitter_handle',
        'description' => __('please enter your twitter link'),
        
    )));

    //Instagram 
    $wp_customize -> add_setting('therapy_instagram_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'therapy_instagram_handle_input', array(
        'label' => __('Instagram Link', 'therapy'),
        'section' => 'therapy_header_section',
        'settings' => 'therapy_instagram_handle',
        'description' => __('please enter your instagram Link'),
        
    )));

    //Pinterest

    $wp_customize -> add_setting('therapy_pinterest_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'therapy_pinterest_handle_input', array(
        'label' => __('Pinterest Link', 'therapy'),
        'section' => 'therapy_header_section',
        'settings' => 'therapy_pinterest_handle',
        'description' => __('please enter your pinterest link'),
        
    )));
}
add_action('customize_register', 'therapy_customize_register');


//footer customizer==============================================

function therapy_footer_customize_register($wp_customize){
     //header section

    $wp_customize-> add_section('therapy_footer_section', [
        'title' => __('Footer Section', 'therapy'),
        'priority' => 40,
    ]);

    //Footer Logo
    $wp_customize -> add_setting('therapy_img_handle',[
        'transport' => 'refresh',
        'height' => 320
    ]);
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'therapy_img_handle_input', array(
        'label' => __('Footer Logo', 'therapy'),
        'section' => 'therapy_footer_section',
        'settings' => 'therapy_img_handle',
        
    )));

    
    //content
    $wp_customize -> add_setting('therapy_content_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'therapy_content_handle_input', array(
        'label' => __('Footer Content', 'therapy'),
        'section' => 'therapy_footer_section',
        'settings' => 'therapy_content_handle',
        'type'     => 'textarea'
        
    )));

    //copyright
     $wp_customize -> add_setting('therapy_copyright_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'therapy_copyright_handle_input', array(
        'label' => __('Copyright', 'therapy'),
        'section' => 'therapy_footer_section',
        'settings' => 'therapy_copyright_handle',
        'type'     => 'text',
    )));

    //designed by logo
    $wp_customize -> add_setting('therapy_designed_img_handle',[
        'transport' => 'refresh',
        'height' => 320
    ]);
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'therapy_designed_img_handle_input', array(
        'label' => __('Designed By', 'therapy'),
        'section' => 'therapy_footer_section',
        'settings' => 'therapy_designed_img_handle',
        
    )));

     //Newslater content
     $wp_customize -> add_setting('therapy_newsletter_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'therapy_newsletter_handle_input', array(
        'label' => __('Newsletter Content', 'therapy'),
        'section' => 'therapy_footer_section',
        'settings' => 'therapy_newsletter_handle',
        'type'     => 'textarea',
    )));
}
add_action('customize_register', 'therapy_footer_customize_register');

//sidebar widgets
function therapy_sidebars(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget'  => '<div class="widget">',
        'after_widget'   => '</div>',
        'before-title' => '<h5>',
        'after_title' => '</h5>',
        
    ));
}
add_action('widgets_init','therapy_sidebars'); 