<?php

// Custom fields
$prelaunch_price = get_post_meta( 7, 'prelaunch_price', true );
$launch_price = get_post_meta( 7, 'launch_price', true );
$final_price = get_post_meta( 7, 'final_price', true );
$course_url = get_post_meta( 7, 'course_url', true );
$enroll_btn_txt = get_post_meta( 7, 'enroll_btn_txt', true );
$call_to_action = get_post_meta( 7, 'call_to_action', true );
$cta_benefit = get_post_meta( 7, 'cta_benefit', true );
$cta_btn_txt = get_post_meta( 7, 'cta_btn_txt', true );

?>

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