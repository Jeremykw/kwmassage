<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

	<!-- start container -->
<div id="container">
<div id="container_top">
<div class="header_wrap">
<!-- inner -->
<!-- start leftcol -->
<div id="leftcol">
<?php if(is_home()){ ?>
<!-- videobox -->
<?php 	/* Widgetized sidebar, if you have the plugin installed. */
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('HomePage Videobox Widget Area') ) : ?>

<?php endif; ?>

<!-- videobox -->
<?php } else {
?>


 <?php
  if($post->post_parent) {
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  $titlenamer = get_the_title($post->post_parent);
  }

  else {
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  $titlenamer = get_the_title($post->ID);
  }
  if ($children) { ?>
		<!-- submenu -->
		<div id="submenu">
		<div id="submenu_in">
		  <a  class="heading active"><?php echo $titlenamer; ?></a>
		  <ul>
		  <?php echo $children; ?>
		  </ul>
		<!-- inner -->
		</div>
		</div>
		<!-- submenu -->
		
		<?php } else { ?>
			<div style="height:16px"></div>
		<?php } ?>



<?php } ?>



<!-- timebox -->
<?php 	/* Widgetized sidebar, if you have the plugin installed. */
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Timebox Widget Area') ) : ?>

<?php endif; ?>

</div>
<!-- end leftcol -->
