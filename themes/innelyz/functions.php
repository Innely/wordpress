<?php
/**
 * innelyz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package innelyz
 */

if ( ! function_exists( 'innelyz_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function innelyz_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on innelyz, use a find and replace
		 * to change 'innelyz' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'innelyz', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// Add theme support for Custom Logo
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 400,
			'flex-width'  => true,
			'flex-height' => true,
			) );
		}
		endif;
		add_action( 'after_setup_theme', 'innelyz_setup' );
		
		// Register widget area
		function innelyz_widgets_init() {
			register_sidebar( );
		}
		add_action( 'widgets_init', 'innelyz_widgets_init' );


        // Enqueue scripts and styles.
        function innelyz_scripts() {
            wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '3.3.7', false);
            wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.css', array(), false, 'all' );
            wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lora|Pacifico|Roboto');
            wp_enqueue_style( 'innelyz-style', get_stylesheet_uri() );
        }
        add_action( 'wp_enqueue_scripts', 'innelyz_scripts' );
