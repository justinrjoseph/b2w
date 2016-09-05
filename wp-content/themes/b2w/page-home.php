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
				
				<h2>Final Project Features</h2>
				<p class="lead">
					In this course, you build an incredibly beautiful website. Want to see what <strong>you</strong> are building? <em>You're looking at it!</em> The website you're using right now is the website you&rsquo;ll have built entirely by yourself by the end of this course.
				</p><!-- /.lead -->

				<div class="row">
					<div class="col-sm-4">
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/icon-design.png" alt="Design">
						<h3>Sexy &amp; Modern Design</h3>
						<p>You get to work with a modern, professional-quality design &amp; layout.</p>
					</div><!-- /.col-sm-4 -->

					<div class="col-sm-4">
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/icon-code.png" alt="Code">
						<h3>Quality HTML5 &amp; CSS3</h3>
						<p>You&rsquo;ll learn how to hand-craft a stunning website with valid, semantic, and beautiful HTML5 &amp; CSS3.</p>
					</div

					<div class="col-sm-4">
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/icon-design.png" alt="Design">
						<h3>Easy-to-use CMS</h3>
						<p>
							Allow your clients to easily update their websites by converting your static files into dynamic templates that hook in to the WordPress API.
						</p>
					</div>
				</div><!-- /.row -->

			</div><!-- /.container -->
		</section><!-- /#project-features -->

		<!-- VIDEO FEATURETTE 
		=========================================================== -->
		<section id="featurette">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h2>Watch the Course Introduction</h2>
						<iframe width="100%" height="415" src="https://www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
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
								<h2>Your Instructor <small>Brad Hussey</small></h2>
							</div><!-- /.col-lg-8 -->
							<div class="col-lg-4">
								<a href="https://twitter.com/bradhussey" target="_blank" class="badge social twitter">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="https://facebook.com/bradhussey" target="_blank" class="badge social facebook">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="https://plus.google.com/+BradHussey" target="_blank" class="badge social gplus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div><!-- /.col-lg-4 -->
						</div><!-- /.row -->

						<p class="lead">
							A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer, blogger and digital entrepreneur.
						</p><!-- /.lead -->

						<p>
							Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the West Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spear-head in his trade of solving problems on the web, crafting design solutions, and speaking in code.
						</p>

						<p>
							Brad&rsquo;s determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big &amp; small, across the Americas.
						</p>

						<p>
							Brad builds custom websites, and provides design solutions for a wide array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.
						</p>

						<hr>

						<h3>
							The Numbers <small>They Don&rsquo;t Lie</small>
						</h3>

						<div class="row">
							<div class="col-xs-4">
								<div class="number">
									<div class="number-content">
										41,000+ <span>students</span>
									</div><!-- /.number-content -->
								</div><!-- /.number -->
							</div><!-- /.col-xs-4 -->

							<div class="col-xs-4">
								<div class="number">
									<div class="number-content">
										568 <span>reviews</span>
									</div><!-- /.number-content -->
								</div><!-- /.number -->
							</div><!-- /.col-xs-4 -->

							<div class="col-xs-4">
								<div class="number">
									<div class="number-content">
										8 <span>courses</span>
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

						<!-- TESTIMONIAL 
						=========================================================== -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/brennan.jpg" alt="Brennan">
							</div><!-- /.col-sm-4 -->
							<div class="col-sm-8">
								<blockquote>
									These videos are well-created, concise, fast-paced, easy-to-follow, and just funny enough to keep you chuckling as you&rsquo;re slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.
									<cite>&mdash; Brennan, graduate of all of Brad&rsquo;s courses</cite>
								</blockquote>
							</div><!-- /.col-sm-8 -->
						</div><!-- /.row testimonial -->

						<!-- TESTIMONIAL 
						=========================================================== -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
							</div><!-- /.col-sm-4 -->
							<div class="col-sm-8">
								<blockquote>
									I found Brad to be a great teacher, and a very inspiring person. It&rsquo;s clear he is very passionate about helping designers learn to code, and I look forward to more courses from him!
									<cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
								</blockquote>
							</div><!-- /.col-sm-8 -->
						</div><!-- /.row testimonial -->

						<!-- TESTIMONIAL 
						=========================================================== -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/aj.png" alt="Illustration of a bearded man">
							</div><!-- /.col-sm-4 -->
							<div class="col-sm-8">
								<blockquote>
									Brad is amazing and I honestly think he&rsquo;s the best tutor of all the courses I have taken on Udemy. Will definitely be following him in the future. Thanks Brad!
									<cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
								</blockquote>
							</div><!-- /.col-sm-8 -->
						</div><!-- /.row testimonial -->

						<!-- TESTIMONIAL 
						=========================================================== -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
							</div><!-- /.col-sm-4 -->
							<div class="col-sm-8">
								<blockquote>
									Brad is an excellent instructor. His content is super high-quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like you&rsquo;re doing something right out the gate! I really can&rsquo;t believe this is free. I highly recommend taking advantage of this course.
									<cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
								</blockquote>
							</div><!-- /.col-sm-8 -->
						</div><!-- /.row testimonial -->

					</div><!-- /.col-sm-8 col-sm-offset-2 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /#testimonials -->

<?php get_footer(); ?>