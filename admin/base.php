<?php
/**
 * @package WordPress
 * @subpackage Basic
 */
?>
<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'base.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');

// framework predefined names
$wptheme_name = "Basic";
$wptheme_shortname = "bsc";

function al_admin() {
	if ( $_GET['updated'] ) echo '<div id="message" class="updated fade"><p>Theme options saved.</p></div>';
    require_once($func_path. 'settings_template.php');
}

function al_admin_init() {
	  add_menu_page($wptheme_name." Options", "Theme Options", 'edit_themes', basename(__FILE__), 'al_admin', get_bloginfo('template_directory')."/admin/images/framework_icon.png", 65);
}

add_action('admin_menu', "al_admin_init");

?>