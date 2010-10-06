<?php
/**
 * @package WordPress
 * @subpackage Basic
 */
?>
<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'settings_template.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
?>

<div class="wrap">
<div class="icon32" id="icon-themes"><br></div>
<h2>Theme Options</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<div id="poststuff" class="metabox-holder has-right-sidebar">

<div class="inner-sidebar" id="side-info-column">
<div class="postbox" id="linksubmitdiv">
<h3 style="cursor:default;"><span>About</span></h3>
<div class="inside">


<div id="minor-publishing">

<div id="misc-publishing-actions">
<div class="misc-pub-section misc-pub-section-last">
<p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lectus eu risus sagittis mattis consequat lectus pharetra. Nam ante velit, euismod at aliquet quis, molestie mattis ipsum. Proin scelerisque faucibus rutrum. Nunc scelerisque odio in metus mollis sed pellentesque augue vulputate. Nulla quis neque velit. Duis sit amet odio eget libero vestibulum bibendum. Vestibulum vehicula ligula at leo dictum ac faucibus ligula luctus. </em></p>
</div>
</div>

</div>

<div id="major-publishing-actions">

<div id="publishing-action">
	<input type="submit" value="Donate" class="button-primary">
</div>

<div class="clear"></div>
</div>
<div class="clear"></div>
</div>

</div>
</div>

<div id="post-body-content">
<div class="stuffbox">
<h3 style="padding:12px;">
<a class="button rbutton" href="#">General Settings</a>
<a class="button rbutton" href="#">Layout</a>
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" style="float:right;margin-top:-4px;padding:2px 5px;" />
</h3>
<div class="inside">
<p>lorem ipsum</p>
</div></div>
</div>


<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="" />




</form>

</div>