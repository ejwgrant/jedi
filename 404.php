<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
	<section id="content" class="clearfix">
		<main class="clearfix">
			<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
			<p><?php _e( 'Apologies, but the page you requested could not be found. Please use the main menu to choose a page.', 'twentyten' ); ?></p>
		</main>
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>