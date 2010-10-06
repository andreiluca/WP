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

<h2><?php echo AL_THEMENAME; ?> <?php _e("Theme Options","basic"); ?> v<?php echo AL_THEMEVERSION; ?></h2>

<form method="post" id="update-options" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<div id="poststuff" class="metabox-holder has-right-sidebar">
<div class="inner-sidebar" id="side-info-column">
<div class="postbox" id="linksubmitdiv">

<h3><span><?php _e("About","basic"); ?></span></h3>

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
</div><!-- #side-info-column -->

<div id="post-body-content">
<div class="stuffbox">
<h3>

<ul class="tabs">
    <?php foreach(getDirectoryList(AL_OPTPATH, true) as $menu_item): ?>

    <li><a class="button rbutton" href="#<?php echo $menu_item; ?>"><?php echo $menu_item; ?></a></li>

    <?php endforeach; ?>

    <li><input type="submit" name="update" class="button-primary" value="<?php _e('Save Changes') ?>" onclick="return setAnchor();" /></li>
</ul>



</h3>
<div id="tabs">
    <?php foreach(getDirectoryList(AL_OPTPATH) as $menu_item): ?>

    <div>

    <?php include_once(AL_OPTPATH . $menu_item); ?>

    </div>

    <?php endforeach; ?>
</div><!-- #tabs -->

</div>
</div>


<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="footer_text" />

</form>

</div>