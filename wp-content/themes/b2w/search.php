<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>

	<!-- FEATURE IMAGE 
	=========================================================== -->
	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title">
			<?php printf( esc_html__( 'Search Results for: %s', 'b2w' ), '<span>' . get_search_query() . '</span>' ); ?>
		</h1>
	</section><!-- /.feature-image feature-image-default-alt -->

	<div class="container">
		<div id="primary" class="row">
			
			<main id="content" class="col-sm-8">


			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

				<?php	get_template_part( 'template-parts/content', 'search' ); ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- /#content.col-sm-8 -->

			<!-- SIDEBAR 
			=========================================================== -->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside><!-- /.col-sm-4 -->

		</div><!-- /#primary.row -->
	</div><!-- /.container -->

<?php get_footer(); ?>