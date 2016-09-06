<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title">Bummer! That page can't be found.</h1><!-- /.page-title -->
	</section>

	<div class="container">
		
		<div id="primary" class="row">
			
			<main id="content" class="col-sm-8">
				
				<div class="error-404 not-found">
					
					<div class="page-content">
						
						<h2>Don't fret! Let's get you back on track.</h2>

						<!-- RESOURCES 
						=========================================================== -->
						<h3>Resources</h3>
						<p>Perhaps you were looking for a certain resource?</p>

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
								<?php the_excerpt(); ?>

								<?php if ( !empty($resource_btn_txt) ) : ?>
								<a href="<?php echo $resource_url; ?>" class="btn btn-success">
									<?php echo $resource_btn_txt; ?>
								</a>
								<?php endif; ?>
							</div><!-- /.resource -->

							<?php endwhile; ?>
						</div><!-- /.resource-row clearfix -->

						<!-- CATEGORIES 
						=========================================================== -->
						<h3>Categories</h3>
						<p>... or maybe a popular category?</p>

						<div class="widget widget-categories">
							<h4 class="widget-title">Most Used Categories</h4><!-- /.widget-title -->
							<ul>
								<?php

									wp_list_categories( array( 
										'orderby' 	 => 'count',
										'order'			 => 'DESC',
										'show_count' => 1,
										'title_li'	 => '',
										'number'		 => 10
									) );

								?>
							</ul>
						</div><!-- /.widget widget-categories -->

						<!-- ARCHIVES 
						=========================================================== -->
						<p>You can always sort through our archives...</p>
						<?php the_widget( 'WP_Widget_Archives', 'title=Months', 'before_title=<h4 class="widget-title">&after_title=</h4>' ); ?>

						<p>... or, just head back to the <a href="<?php echo esc_url( home_url( '/' ) ); ?>">home page</a>.</p>

					</div><!-- /.page-content -->

				</div><!-- /.error-404 not-found -->

			</main><!-- /#content.col-sm-8 -->

			<!-- SIDEBAR 
			=========================================================== -->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside><!-- /.col-sm-4 -->

		</div><!-- /#primary.row -->

	</div><!-- /.container -->

<?php get_footer(); ?>