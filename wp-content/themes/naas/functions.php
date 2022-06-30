<?php

    function load_stylesheets()
    {

        wp_register_style('bootstrap',get_template_directory_uri() . '/./assets/css/vendor/bootstrap.min.css', array(), 1,'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('font-awesome',get_template_directory_uri() . '/assets/css/plugins/font-awesome.min.css', array(), 1,'all');
        wp_enqueue_style('font-awesome');

        wp_register_style('swiper-bundle',get_template_directory_uri() . '/assets/css/plugins/swiper-bundle.min.css', array(), 1,'all');
        wp_enqueue_style('swiper-bundle');

        wp_register_style('animate',get_template_directory_uri() . '/assets/css/plugins/animate.min.css', array(), 1,'all');
        wp_enqueue_style('animate');

        wp_register_style('odometer-theme-default',get_template_directory_uri() . '/odometer-theme-default.min.css', array(), 1,'all');
        wp_enqueue_style('odometer-theme-default');

        wp_register_style('fancybox',get_template_directory_uri() . '/assets/css/plugins/fancybox.min.css', array(), 1,'all');
        wp_enqueue_style('fancybox');

        wp_register_style('magnific-pupup',get_template_directory_uri() . '/assets/css/plugins/magnific-pupup.css', array(), 1,'all');
        wp_enqueue_style('magnific-pupup');

        wp_register_style('style',get_template_directory_uri() . '/./assets/css/style.css', array(), 1,'all');
        wp_enqueue_style('style');

        wp_register_style('custom',get_template_directory_uri() . '/custom.css', array(), 1,'all');
        wp_enqueue_style('custom');
 
    }

    add_action('wp_enqueue_scripts', 'load_stylesheets');
   
   


    // Load Scripts

    function addjs() 
    {

        wp_register_script('jquery_',get_template_directory_uri() . '/./assets/js/vendor/jquery-3.6.0.min.js', array(), 1,1,1);
        wp_enqueue_script('jquery_');

        wp_register_script('modernizr',get_template_directory_uri() . '/./assets/js/vendor/modernizr-3.11.7.min.js', array(), 1,1,1);
        wp_enqueue_script('modernizr');

        wp_register_script('jquery-migrate',get_template_directory_uri() . '/./assets/js/vendor/jquery-migrate-3.3.2.min.js', array(), 1,1,1);
        wp_enqueue_script('jquery-migrate');

        wp_register_script('bootstrap',get_template_directory_uri() . '/./assets/js/vendor/bootstrap.min.js', array(), 1,1,1);
        wp_enqueue_script('bootstrap');

        wp_register_script('magnificpopup',get_template_directory_uri() . '/./assets/js/plugins/magnificpopup.min.js', array(), 1,1,1);
        wp_enqueue_script('magnificpopup');

        wp_register_script('swiper-bundle',get_template_directory_uri() . '/./assets/js/plugins/swiper-bundle.min.js', array(), 1,1,1);
        wp_enqueue_script('swiper-bundle');

        wp_register_script('tilt',get_template_directory_uri() . '/./assets/js/plugins/tilt.jquery.min.js', array(), 1,1,1);
        wp_enqueue_script('tilt');

        wp_register_script('odometer',get_template_directory_uri() . '/./assets/js/plugins/odometer.min.js', array(), 1,1,1);
        wp_enqueue_script('odometer');

        wp_register_script('isotope',get_template_directory_uri() . '/./assets/js/plugins/isotope.min.js', array(), 1,1,1);
        wp_enqueue_script('isotope');

        wp_register_script('imagesloaded',get_template_directory_uri() . '/./assets/js/plugins/imagesloaded.min.js', array(), 1,1,1);
        wp_enqueue_script('imagesloaded');

        wp_register_script('waypoint',get_template_directory_uri() . '/./assets/js/plugins/waypoint.min.js', array(), 1,1,1);
        wp_enqueue_script('waypoint');

        wp_register_script('wow',get_template_directory_uri() . '/./assets/js/plugins/wow.min.js', array(), 1,1,1);
        wp_enqueue_script('wow');

        wp_register_script('fancybox',get_template_directory_uri() . '/./assets/js/plugins/fancybox.min.js', array(), 1,1,1);
        wp_enqueue_script('fancybox');

        wp_register_script('ajaxchimp',get_template_directory_uri() . '/./assets/js/plugins/jquery.ajaxchimp.min.js', array(), 1,1,1);
        wp_enqueue_script('ajaxchimp');

        wp_register_script('main',get_template_directory_uri() . '/./assets/js/main.js', array(), 1,1,1);
        wp_enqueue_script('main');

        wp_register_script('home',get_template_directory_uri() . '/./assets/js/pages/home.js', array(), 1,1,1);
        wp_enqueue_script('home');

        wp_register_script('custom',get_template_directory_uri() . '/custom.js', array(), 1,1,1);
        wp_enqueue_script('custom');

    }

    add_action('wp_enqueue_scripts', 'addjs');

    add_theme_support('menus');

    
 
    register_nav_menus(

        array(
            'top-menu' => __('Top Menu', 'theme'),
            
        )
        );

        function naas_custom_logo_setup() {
            $defaults = array(
                'height'               => 33.28,
                'width'                => 120,
                'flex-height'          => true,
                'flex-width'           => true,
                // 'header-text'          => array( 'site-title', 'site-description' ),
                // 'unlink-homepage-logo' => true, 
            );
         
            add_theme_support( 'custom-logo', $defaults );
        }
    
        add_action( 'after_setup_theme', 'naas_custom_logo_setup' );
    