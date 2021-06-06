<?php


    if(!isset($redux_demo)) {
        require_once(dirname(__File__). '/theme-config.php');
    }

    define( 'WESLEY_THEME_DIR', trailingslashit( get_template_directory() ) );
    define( 'WESLEY_THEME_URI' , get_template_directory_uri() );

    function wesley_customizer_settings($wp_customizer) {
        $wp_customizer->add_section('header', array(
            'title'=>'Header Settings'
        ));

        $wp_customizer->add_setting('user_image', array(
            'capability'=>'edit_theme_options'
        ));

        $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'user_image', array(
            'label'=>__('User Image', 'Wesley'),
            'section'=>'header'
        )));
    }


    add_action('customize_register', 'wesley_customizer_settings');

    function wesley_theme_support() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
    }

    add_action('after_setup_theme', 'wesley_theme_support');

    function wesley_menus() {
        $locations = array(
            'primary'=>"Desktop primary navbar",
            'footer'=>"Footer menu items"
        );

        register_nav_menus($locations);

    }

    add_action('init', 'wesley_menus');

    function wesley_register_styles() {

        wp_enqueue_style('custom', WESLEY_THEME_URI.'/style.css');
        wp_enqueue_style('blog_theme', WESLEY_THEME_URI.'/css/clean-blog.min.css');
        wp_enqueue_style('boostrap', WESLEY_THEME_URI.'/vendor/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('font-awesome', WESLEY_THEME_URI.'/vendor/font-awesome/css/font-awesome.min.css');
        wp_enqueue_style('google-font-style-1', WESLEY_THEME_URI.'/https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
        wp_enqueue_style('google-font-style-2', WESLEY_THEME_URI.'/https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
        

    }

    add_action('wp_enqueue_scripts', 'wesley_register_styles');

    function wesley_register_scripts() {

        wp_enqueue_script('jquery', get_template_directory_uri().'/vendor/jquery/jquery.min.js');
        wp_enqueue_script('boostrap-script', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.min.js');
        wp_enqueue_script('jqBootstrapValidation', get_template_directory_uri().'/js/jqBootstrapValidation.js');
        wp_enqueue_script('contact_me',  get_template_directory_uri().'/js/contact_me.js');
        wp_enqueue_script('clean-blog',  get_template_directory_uri().'/js/clean-blog.min.js');

    }

    add_action('wp_enqueue_scripts', 'wesley_register_scripts');

?>