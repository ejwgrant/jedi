<?php
/**
 * Template Name: main
 */

get_header(); 

?>
        <section id="content" class="main clearfix">
        	<main class="clearfix">
	            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	            <h1><?php the_title(); ?></h1>
	            <?php the_content();
	            endwhile; // end of the loop. ?>
        	</main>
        	<?php get_sidebar(); ?>
        </section>
<?php get_footer(); ?>