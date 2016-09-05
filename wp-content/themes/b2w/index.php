<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>

	<!-- FEATURE IMAGE 
	=========================================================== -->
	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title">Blog</h1><!-- /.page-title -->
	</section><!-- /.feature-image feature-image-default-alt -->

	<!-- BLOG CONTENT 
	=========================================================== -->
	<div class="container">
		<div class="row" id="primary">
			
			<main id="content" class="col-sm-8" role="main">

			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

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