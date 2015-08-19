<?php
/**
 * The Template for displaying all single posts.
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
				<h1>
               <?php the_title(); ?>
                </h1>
				<small><?php the_time('l, F jS, Y') ?></small>

				<div class="entry">
					<?php the_content() ?>
				</div>
			</div>

		<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
</div>
<!-- end rightcol -->
<!-- inner -->
</div>
</div>
</div>
<!-- end container -->
<?php get_footer(); ?>
