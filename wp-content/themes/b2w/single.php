<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>

	<!-- MAIN CONTENT 
	=========================================================== -->
	<div class="container">
		<div class="row" id="primary">

			<main id="content" class="col-sm-8">

			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			
			<?php if ( comments_open() || get_comments_number() ) : ?>
			<?php comments_template(); ?>
			<?php endif; ?>

			<?php endwhile; ?>

			</main><!-- #main -->

			<!-- SIDEBAR 
			=========================================================== -->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside><!-- /.col-sm-4 -->
			
		</div><!-- #primary -->
	</div><!-- /.container -->

<?php get_footer(); ?>
