<?php
/**
 * @package WordPress
 * @subpackage Basic
 */
?>
<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'functions.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');


// theme predefined names
$wptheme_name = "Basic";
$wptheme_shortname = "bsc";

// Functions Path
$func_path = TEMPLATEPATH . '/admin/';
$assets_path = get_bloginfo('template_directory') . '/admin/assets/';

// Register Sidebar
if ( function_exists('register_sidebar') ) {
    register_sidebar(
                        array(
                            'name' =>'Basic Sidebar',
                            'before_widget' => '',
                            'after_widget' => '',
                            'before_title' => '',
                            'after_title' => ''
                            )
                    );
    }

<<<<<<< HEAD
=======

// Functions Path
$func_path = TEMPLATEPATH . '/admin/';
$assets_path = get_bloginfo('template_directory') . '/admin/assets/';

>>>>>>> 295d923740edd113c52408844b5c59fe8fc729f0
// Custom Functions
if(is_admin()){
    require_once($func_path. 'be_functions.php');

    // Admin Filters
    add_filter('favorite_actions', 'custom_favorite_menu');

}else{
    require_once($func_path. 'fe_functions.php');

    // Front-end Filters
    add_filter('wp_trim_excerpt', 'new_excerpt_more');
    add_filter('the_content_more_link', 'remove_more_jump_link');

}

// Theme Options
require_once($func_path. 'base.php');

?>