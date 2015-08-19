<?php

/**

 * Template Name: Blog Page Template

 *

 * A custom page template without sidebar.

 *

 * The "Template Name:" bit above allows this to be selectable

 * from a dropdown menu on the edit page screen.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */



get_header(); ?>


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
<div class="gap" style="height:30px;">&nbsp;</div>
<?php 	/* Widgetized sidebar, if you have the plugin installed. */
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Third Footer Widget Area ') ) : ?>

<?php endif; ?>


</div>
<!-- end leftcol -->




<?php //get_sidebar(); ?>



<?php //dynamic_sidebar( 'third-footer-widget-area' ); ?>



<!-- start rightcol -->

<div id="rightcol">

		 <?php $category_id = get_cat_ID( 'Home' );

											$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;									

									  	 $categories=get_categories();

 										 foreach($categories as $category) 

										 { 

										 	$option .= $category->term_id.','; 

											

										} 

										$option .= '1'.',-'.$category_id;

										query_posts('cat='.$option.'&paged='.$paged);

										if (have_posts()) : ?>

 	 

		<?php while (have_posts()) : the_post(); ?>

        

		<div <?php post_class() ?>>

				<h2>

               <?php the_title(); ?>

                </h2>

				<small><?php the_time('l, F jS, Y') ?></small>



				<div class="entry">

					<?php the_excerpt() ?>

				</div>

			</div>



		<?php endwhile; ?>



		<div class="navigation">

			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>

			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

		</div>

	<?php else :





	endif;

?>

</div>

<!-- end rightcol -->

<!-- inner -->

</div>

</div>

</div>

<!-- end container -->

<?php get_footer(); ?>

