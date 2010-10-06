<?php
/**
 * @package WordPress
 * @subpackage Basic
 */
?>
<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'be_functions.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');

function custom_favorite_menu($actions) {

# Removing #
//unset($actions['edit-comments.php']);

# Adding #
$actions['admin.php?page=base.php'] = array('Theme Settings', 'manage_options');

return $actions;
}
?>