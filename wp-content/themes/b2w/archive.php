<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

	<!-- FEATURE IMAGE 
	=========================================================== -->
	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1>
			<?php
				the_archive_title();
				the_archive_description( '<small class="taxonomy-description">', '</small>' );
			?>
		</h1>
	</section>
	
	<div class="container">
		<div id="primary" class="row">
			<main id="content" class="col-sm-8">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

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