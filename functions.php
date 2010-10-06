<?php
/**
 * @package WordPress
 * @subpackage Basic
 */
?>
<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'functions.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');

$theme_data = get_theme_data(TEMPLATEPATH . '/style.css');
$theme_version = trim($theme_data['Version']);
if(!$theme_version) $theme_version = "1.0";

if ( ! isset( $content_width ) ) $content_width = 640;

// Predefined Constants
define('AL_THEMENAME', $theme_data['Title']);
define('AL_THEMEVERSION', $theme_version);
define('AL_ADMINPATH', 	TEMPLATEPATH . '/admin/');
define('AL_HOOKSPATH', 	AL_ADMINPATH . 'hooks/');
define('AL_OPTPATH', 	AL_ADMINPATH . 'theme-options/');
define('AL_ASSETSPATH', get_bloginfo('template_url') . '/admin/assets/');

// Register Sidebar
function al_widgets_init() {

	register_sidebar( array(
		'name' => __('Sidebar', 'basic'),
		'id' => 'right-sidebar',
		'description' => __('Right Sidebar area', 'basic'),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}

// Custom Hooks
if(is_admin()){
    require_once(AL_HOOKSPATH. 'back_func.php');

    // Back-end Filters
    add_filter('favorite_actions', 'custom_favorite_menu');

}else{
    require_once(AL_HOOKSPATH. 'front_func.php');

    // Front-end Filters
    // add_filter('wp_trim_excerpt', 'new_excerpt_more');
    // add_filter('the_content_more_link', 'remove_more_jump_link');

}

// Load Theme Options
require_once(AL_ADMINPATH. 'base.php');


if ( ! function_exists( 'al_setup' ) ) {
    function al_setup() {

        if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
        if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'menus' );
        if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'automatic-feed-links' );
        if ( function_exists( 'add_custom_background' ) ) add_custom_background();

        // Localization
        load_theme_textdomain( 'basic', TEMPLATEPATH . '/languages' );
        $locale = get_locale();
    	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
    	if ( is_readable( $locale_file ) )
    	require_once( $locale_file );
    }
}

add_action( 'after_setup_theme', 'al_setup' );
add_action( 'widgets_init', 'al_widgets_init' );

?>