<?php
/**
 * @package WordPress
 * @subpackage Basic
 */
?>
<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'back_func.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');

function custom_favorite_menu($actions) {

# Removing #
//unset($actions['edit-comments.php']);

# Adding #
$actions['admin.php?page=base.php'] = array(__('Theme Settings', 'basic'), 'manage_options');

return $actions;
}


function getDirectoryList ($directory, $clean=false)
  {

    // create an array to hold directory list
    $results = array();
    // create a handler for the directory
    $handler = opendir($directory);
    // open directory and walk through the filenames
    while ($file = readdir($handler)) {
      // if file isn't this directory or its parent, add it to the results
      if ($file != "." && $file != "..") {
        $results[] = $file;
      }
    }

    // tidy up: close the handler
    closedir($handler);
    // done!
    if($clean == true){ $results = str_replace(".php", "", $results); }
    return $results;
  }




?>