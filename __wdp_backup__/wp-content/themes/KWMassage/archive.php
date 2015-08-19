<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div class="container">
        		<div class="container_left">

	<?php if (have_posts()) : ?>       

 	 
		<?php while (have_posts()) : the_post(); ?>
        
		<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h3>
				
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

 <?php include (TEMPLATEPATH . '/Right_sidebar.php'); ?>
 <?php get_footer(); ?>
