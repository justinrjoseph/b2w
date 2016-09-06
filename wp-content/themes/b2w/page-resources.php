<?php 
/*
	Template Name: Resources
*/

get_header();

$banner_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

		<!-- FEATURE IMAGE 
		=========================================================== -->
		<?php if ( has_post_thumbnail() ) : ?>
		<section class="feature-image" style="background-image: url(<?php echo $banner_url; ?>); background-size: cover;" data-type="background" data-speed="2">
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
						<?php endwhile ?>

						<hr>

						<div class="resource-row clearfix">

							<?php 

								$loop = new WP_Query( array(
									'post_type' => 'resource',
									'orderby' 	=> 'post_id',
									'order' 		=> 'ASC'
								) );

							?>

							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<?php $resource_featured_image = get_field('resource_featured_image'); ?>
							<?php $resource_url = get_field('resource_url'); ?>
							<?php $resource_btn_txt = get_field('resource_btn_txt'); ?>

							<div class="resource">
								<img src="<?php echo $resource_featured_image['url']; ?>" alt="<?php echo $resource_featured_image['alt']; ?>">
								<h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>
								<?php the_content(); ?>

								<?php if ( !empty($resource_btn_txt) ) : ?>
								<a href="<?php echo $resource_url; ?>" class="btn btn-success">
									<?php echo $resource_btn_txt; ?>
								</a>
								<?php endif; ?>
							</div><!-- /.resource -->

							<?php endwhile; ?>
						</div><!-- /.resource-row clearfix -->

					</section><!-- /.main-content -->

				</div><!-- /#content.col-sm-12 -->

			</div><!-- /#primary.row -->
		</div><!-- /.container -->

<?php get_footer(); ?>