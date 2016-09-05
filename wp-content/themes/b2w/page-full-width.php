<?php
/*
	Template Name: Full-width
*/

get_header();

$banner_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

		<!-- FEATURE IMAGE 
		=========================================================== -->
		<?php if ( has_post_thumbnail() ) : ?>
		<section class="feature-image feature-image-default" style="background-image: url(<?php echo $banner_url; ?>) no-repeat; background-size: cover;" data-type="background" data-speed="2">
		<?php else : ?>
		<section class="feature-image feature-image-default" data-type="background" data-speed="2">
		<?php endif; ?>
			<h1 class="page-title"><?php the_title(); ?></h1><!-- /.page-title -->
		</section><!-- /.feature-image feature-image-default-alt -->

		<!-- MAIN CONTENT 
		=========================================================== -->
		<div class="container">
			<div class="row" id="primary">
				<div id="content" class="col-sm-12">
					
					<section class="main-content">
						
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>

					</section><!-- /.main-content -->

				</div><!-- /#content.col-sm-12 -->
			</div><!-- /#primary.row -->
		</div><!-- /.container -->

<?php get_footer(); ?>