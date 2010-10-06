<?php
/**
 * @package WordPress
 * @subpackage Basic
 */
?>
<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'posts.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
?>

<table class="widefat">
<tr>
<th class="valign">Skin</th>
<td>
<p>Please choose one of the 3 skins here</p>
</td>
</tr>

<tr class="alternate">
<th class="valign">Logo</th>
<td><p>Add the full URI path to your logo. the themes default logo gets applied if the input field is left blank<br>Logo Dimension: 210px * 90px (if your logo is larger it will get cropped, either resize the logo or change the dimension of the logo area in style.css)<br> URI Exampe: http://www.yourdomain.com/path/to/image.jpg</p><br><br><input type="text" name="logo" id="logo" value="" size="80"><br><br>
</td>
</tr>

<tr>
<th class="valign">Extra Widget Areas for specific Pages</th>
<td><p>Here you can add widget areas for single pages. that way you can put different content for each page into your sidebar.<br>
After you have choosen the Pages press the 'Save Changes' button and then start adding widgets to your new widget areas <a href="widgets.php">here</a>.<br><br>
</p>
</td>
</tr>

<tr class="alternate">
<th class="valign">Google Analytics Code</th>
<td>
<p>Paste your analytics code here, it will get applied to each page</p><br><textarea class="code" style="width: 80%; font-size: 12px;" id="analytics" rows="7" cols="60" name="analytics"></textarea><br><br>
</td>
</tr>


</table>