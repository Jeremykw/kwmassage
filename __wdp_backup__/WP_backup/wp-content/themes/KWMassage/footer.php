<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
 <!-- start footer -->
<div id="footer">
<!-- top -->
<div id="footer_top">
<ul>
<li class="first">KW massage</li>
<li>Jeremy Bissonnette RMT</li>
<li>229 Frederick Street</li>
<li>Kitchener</li>
<li>On </li>
<li>N2H 2L1</li>
<li>Canada <strong>Tel: 519-745-4112</strong></li>
<li>Email: <a href="mailto:jeremy@kwmassage.com" class="blue">jeremy@kwmassage.com</a></li>
</ul>
</div>
<!-- top -->
<!-- middle -->
<div id="footer_middle">
<?php wp_nav_menu( array('menu' => '','menu_class'=> 'menu2' )); ?>
</div>
<!-- middle -->
<!-- bottom -->
<div id="footer_bottom">
<ul>
<li class="first"><strong>2011</strong>  /  All rights &amp; Copyrights reserved by <strong>KW massage</strong></li>
<li>Site credits <a href="http://www.pixellab.ca" target="_blank">PixelLab</a></li>
</ul>
</div>
<!-- bottom -->
</div>
<!-- end footer -->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
