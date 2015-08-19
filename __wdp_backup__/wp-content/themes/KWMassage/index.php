<?php

/**

 * The main template file.

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query. 

 * E.g., it puts together the home page when no home.php file exists.

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



<?php query_posts('page_id=75'); ?>

<?php while (have_posts()) : the_post(); ?>  

           <?php the_content(); ?>

     <?php endwhile; ?> 






<?php wp_reset_query(); ?>


<!-- form box -->

<div id="formbox"> 



<?php 	/* Widgetized sidebar, if you have the plugin installed. */

	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('HomePage Contact Form Widget Area') ) : ?>



<?php endif; ?>



</div> 

<!-- form box -->

</div>

<!-- end rightcol -->

<!-- inner -->

</div>

</div>

</div>

<!-- end container -->

  

<?php get_footer(); ?>

