<?php
/**
 * Template Name: homepage
 */

get_header(); 

?>
        <section id="content" class="clearfix">
	<div id="home">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php the_content();
            endwhile; // end of the loop. ?>
	</div>
            <?php get_sidebar(); ?>
        </section>
<?php get_footer(); ?>