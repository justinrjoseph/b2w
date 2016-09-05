<?php

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

?>

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