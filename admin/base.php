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
    global $func_path;
	if ( $_GET['updated'] ) echo '<div id="message" class="updated fade"><p>Theme options saved.</p></div>';
    require_once($func_path. 'settings_template.php');
}

function al_admin_init() {
    global $assets_path;
    add_menu_page($wptheme_name." Options", "Theme Options", 'edit_themes', basename(__FILE__), 'al_admin', $assets_path."images/framework_icon.png", 65);
}

function al_admin_assets() {
    global $assets_path;
    echo '<link rel="stylesheet" type="text/css" href="' . $assets_path . 'css/style.css" />' . "\n";
    echo '<script type="text/javascript" src="' . $assets_path . 'js/scripts.js"></script>' . "\n";
}

add_action('admin_menu', "al_admin_init");
add_action('admin_head', 'al_admin_assets');
?>