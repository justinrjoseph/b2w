<?php
/*
	Template Name: Home Page
*/

// Custom fields
$prelaunch_price = get_post_meta( 7, 'prelaunch_price', true );
$launch_price = get_post_meta( 7, 'launch_price', true );
$final_price = get_post_meta( 7, 'final_price', true );
$course_url = get_post_meta( 7, 'course_url', true );
$enroll_btn_txt = get_post_meta( 7, 'enroll_btn_txt', true );
$call_to_action = get_post_meta( 7, 'call_to_action', true );
$cta_benefit = get_post_meta( 7, 'cta_benefit', true );
$cta_btn_txt = get_post_meta( 7, 'cta_btn_txt', true );

// Advanced custom fields
$income_featured_image = get_field('income_featured_image');
$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$reason_1_title = get_field('reason_1_title');
$reason_1_description = get_field('reason_1_description');
$reason_2_title = get_field('reason_2_title');
$reason_2_description = get_field('reason_2_description');

$who_featured_image = get_field('who_featured_image');
$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');

$project_section_title = get_field('project_section_title');
$project_section_description = get_field('project_section_description');

$video_section_title = get_field('video_section_title');
$video_url = get_field('video_url');
$video_width = get_field('video_width');
$video_height = get_field('video_height');

$instructor_section_title = get_field('instructor_section_title');
$instructor_section_name = get_field('instructor_section_name');
$bio_excerpt = get_field('bio_excerpt');
$full_bio = get_field('full_bio');
$twitter_handle = get_field('twitter_handle');
$facebook_username = get_field('facebook_username');
$gplus_handle = get_field('gplus_handle');
$number_of_students = get_field('number_of_students');
$number_of_reviews = get_field('number_of_reviews');
$number_of_courses = get_field('number_of_courses');

get_header(); ?>

		<!-- HERO 
		=========================================================== -->
		<section id="hero" data-type="background" data-speed="5">
			<article>
				<div class="container clearfix">
					<div class="row">
						
						<div class="col-sm-5">
							<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo">
						</div><!-- /.col-sm-5 -->

						<div class="col-sm-7 hero-text">
							<h1><?php bloginfo( 'title' ) ?></h1>
							<p class="lead"><?php bloginfo( 'description' ); ?></p><!-- /.lead -->
							<div id="price-timeline">
								<div class="price active">
									<h4>
										Pre-Launch Price <small>Ends Soon!</small>
									</h4>
									<span><?php echo $prelaunch_price; ?></span>
								</div><!-- /.price -->
								<div class="price">
									<h4>
										Launch Price <small>Coming Soon!</small>
									</h4>
									<span><?php echo $launch_price; ?></span>
								</div><!-- /.price -->
								<div class="price">
									<h4>
										Final Price <small>Coming Soon!</small>
									</h4>
									<span><?php echo $final_price; ?></span>
								</div><!-- /.price -->
							</div><!-- /#price-timeline -->

							<p>
								<a href="<?php echo $course_url; ?>" class="btn btn-lg btn-danger" role="button"><?php echo $enroll_btn_txt; ?> &raquo;</a>
							</p>
						</div><!-- /.col-sm-7 hero-text -->

					</div><!-- /.row -->
				</div><!-- /.container -->
			</article>
		</section><!-- /#hero -->

		<!-- OPT-IN 
		=========================================================== -->
		<section id="opt-in">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-8">
						<p class="lead">
							<strong><?php echo $call_to_action; ?></strong>
							<?php echo $cta_benefit; ?>
						</p><!-- /.lead -->
					</div><!-- /.col-sm-8 -->

					<div class="col-sm-4">
						<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modal"><?php echo $cta_btn_txt; ?></button>
					</div><!-- /.col-sm-4 -->

				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>

		<!-- BOOST YOUR INCOME 
		=========================================================== -->
		<section id="boost-income">
			<div class="container">
				
				<div class="section-header">
					<?php if ( !empty($income_featured_image) ) : ?>
					<img src="<?php echo $income_featured_image['url']; ?>" alt="<?php echo $income_featured_image['alt']; ?>">
					<?php endif; ?>
					<h2><?php echo $income_section_title; ?></h2>
				</div><!-- /.section-header -->

				<p class="lead">
					<?php echo $income_section_description; ?>
				</p><!-- /.lead -->

				<div class="row">
					<div class="col-sm-6">
						<h3><?php echo $reason_1_title; ?></h3>
						<p>
							<?php echo $reason_1_description; ?>
						</p>
					</div><!-- /.col-sm-6 -->
					<div class="col-sm-6">
						<h3><?php echo $reason_2_title; ?></h3>
						<p>
							<?php echo $reason_2_description; ?>
						</p>
					</div><!-- /.col-sm-6 -->
				</div><!-- /.row -->

			</div><!-- /.container -->
		</section><!-- /#boost-income -->

		<!-- WHO BENEFITS 
		=========================================================== -->
		<section id="who-benefits">
			<div class="container">
				
				<div class="section-header">
					<?php if ( !empty($who_featured_image) ) : ?>
					<img src="<?php echo $who_featured_image['url']; ?>" alt="<?php echo $who_featured_image['alt']; ?>">
					<?php endif; ?>
					<h2><?php echo $who_section_title; ?></h2>
				</div><!-- /.section-header -->

				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						
						<?php echo $who_section_body; ?>

					</div><!-- /.col-sm-8 col-sm-offset-2 -->
				</div><!-- /.row -->

			</div><!-- /.container -->
		</section><!-- /#who-benefits -->

		<!-- COURSE FEATURES 
		=========================================================== -->
		<section id="course-features">
			<div class="container">
				
				<div class="section-header">
					<?php if ( !empty($features_section_image) ) : ?>
					<img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
					<?php endif; ?>
					
					<h2><?php echo $features_section_title; ?></h2>

					<?php if ( !empty($features_section_body) ) : ?>
					<p class="lead"><?php echo $features_section_body; ?></p><!-- /.lead -->
					<?php endif; ?>
				</div><!-- /.section-header -->

				<div class="row">
					
					<?php 

						$loop = new WP_Query( array(
							'post_type' => 'course_feature',
							'orderby' 	=> 'post_id',
							'order' 		=> 'ASC'
						) );

					?>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-sm-2">
					<i class="<?php the_field('course_feature_icon'); ?>"></i>
					<h4><?php the_title(); ?></h4>
					</div><!-- /.col-sm-2 -->

					<?php endwhile; ?>

				</div><!-- /.row -->

			</div><!-- /.container -->
		</section><!-- /#course-features -->

		<!-- PROJECT FEATURES 
		=========================================================== -->
		<section id="project-features">
			<div class="container">
				
				<h2><?php echo $project_section_title; ?></h2>
				<p class="lead">
					<?php echo $project_section_description; ?>
				</p><!-- /.lead -->

				<div class="row">

					<?php 

						$loop = new WP_Query( array(
							'post_type' => 'project_feature',
							'orderby' 	=> 'post_id',
							'order' 		=> 'ASC'
						) );

					?>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-sm-4">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail(); ?>
						<?php endif; ?>
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</div><!-- /.col-sm-4 -->

					<?php endwhile; ?>

				</div><!-- /.row -->

			</div><!-- /.container -->
		</section><!-- /#project-features -->

		<!-- VIDEO FEATURETTE 
		=========================================================== -->
		<section id="featurette">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h2><?php echo $video_section_title; ?></h2>
						<iframe width="<?php echo $video_width; ?>" height="<?php echo $video_height; ?>" src="<?php echo $video_url; ?>" frameborder="0" allowfullscreen></iframe>
					</div><!-- /.col-sm-8 col-small-offset-2 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /#featurette -->

		<!-- INSTRUCTOR 
		=========================================================== -->
		<section id="instructor">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-6">
						<div class="row">
							<div class="col-lg-8">
								<h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_section_name; ?></small></h2>
							</div><!-- /.col-lg-8 -->
							<div class="col-lg-4">
								<?php if ( !empty($twitter_handle) ) : ?>
								<a href="https://twitter.com/<?php echo $twitter_handle; ?>" target="_blank" class="badge social twitter">
									<i class="fa fa-twitter"></i>
								</a>
								<?php endif; ?>

								<?php if ( !empty($facebook_username) ) : ?>
								<a href="https://facebook.com/<?php echo $facebook_username; ?>" target="_blank" class="badge social facebook">
									<i class="fa fa-facebook"></i>
								</a>
								<?php endif; ?>

								<?php if ( !empty($gplus_handle) ) : ?>
								<a href="https://plus.google.com/<?php echo $gplus_handle; ?>" target="_blank" class="badge social gplus">
									<i class="fa fa-google-plus"></i>
								</a>
								<?php endif; ?>
							</div><!-- /.col-lg-4 -->
						</div><!-- /.row -->

						<p class="lead">
							<?php echo $bio_excerpt; ?>
						</p><!-- /.lead -->

						<?php echo $full_bio; ?>

						<hr>

						<h3>
							The Numbers <small>They Don&rsquo;t Lie</small>
						</h3>

						<div class="row">
							<div class="col-xs-4">
								<div class="number">
									<div class="number-content">
										<?php echo $number_of_students; ?> <span>students</span>
									</div><!-- /.number-content -->
								</div><!-- /.number -->
							</div><!-- /.col-xs-4 -->

							<div class="col-xs-4">
								<div class="number">
									<div class="number-content">
										<?php echo $number_of_reviews; ?> <span>reviews</span>
									</div><!-- /.number-content -->
								</div><!-- /.number -->
							</div><!-- /.col-xs-4 -->

							<div class="col-xs-4">
								<div class="number">
									<div class="number-content">
										<?php echo $number_of_courses; ?> <span>courses</span>
									</div><!-- /.number-content -->
								</div><!-- /.number -->
							</div><!-- /.col-xs-4 -->
						</div><!-- /.row -->
					</div><!-- /.col-sm-8 -->

					<div class="col-sm-4 col-md-6">
						
					</div><!-- /.col-sm-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /#instructor -->

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

<?php get_footer(); ?>