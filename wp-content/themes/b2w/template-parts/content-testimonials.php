		<!-- TESTIMONIALS 
		=========================================================== -->
		<section id="testimonials">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						
						<h2>What People Are Saying About Brad</h2>

						<?php 

							$loop = new WP_Query( array(
								'post_type' => 'testimonial',
								'orderby' 	=> 'post_id',
								'order' 		=> 'ASC'
							) );

						?>

						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<!-- TESTIMONIAL 
						=========================================================== -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( array(200, 200) ); ?>
								<?php endif; ?>
							</div><!-- /.col-sm-4 -->
							<div class="col-sm-8">
								<blockquote>
									<?php the_content(); ?>
									<cite><?php the_title(); ?></cite>
								</blockquote>
							</div><!-- /.col-sm-8 -->
						</div><!-- /.row testimonial -->

						<?php endwhile; ?>

					</div><!-- /.col-sm-8 col-sm-offset-2 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /#testimonials -->