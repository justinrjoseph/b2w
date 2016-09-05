<?php

$video_section_title = get_field('video_section_title');
$video_url = get_field('video_url');
$video_width = get_field('video_width');
$video_height = get_field('video_height');

?>

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