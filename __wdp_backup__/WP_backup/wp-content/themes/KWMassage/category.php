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


<?php get_sidebar(); ?>
<!-- start rightcol -->
<div id="rightcol">
		 <?php if (have_posts()) : ?>
 	 
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
