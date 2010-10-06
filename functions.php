<?php
/**
 * @package WordPress
 * @subpackage Basic
 */
?>
<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'functions.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');


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


// Functions Path
$func_path = TEMPLATEPATH . '/admin/';
$assets_path = get_bloginfo('template_directory') . '/admin/assets/';

// Theme Options
require_once($func_path. 'base.php');

// Custom Functions
if(is_admin()){
    require_once($func_path. 'be_functions.php');
        }else{
    require_once($func_path. 'fe_functions.php');
}

// Filters
add_filter('favorite_actions', 'custom_favorite_menu');
?>