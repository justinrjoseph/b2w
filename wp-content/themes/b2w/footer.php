<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

		<!-- SIGN-UP 
		=========================================================== -->
		<section id="sign-up" data-type="background" data-speed="4">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
						<p>
							<a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a>
						</p>
					</div><!-- /.col-sm-6 col-sm-3 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /#sign-up -->

		<!-- FOOTER 
		=========================================================== -->
		<footer>
			<div class="container">
				<div class="col-sm-3">
					<p>
						<a href="/">
							<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png" alt="Bootstrap to WordPress" />
						</a>
					</p>
				</div><!-- /.col-sm-3 -->

				<div class="col-sm-6">
					<nav>
						<ul class="list-unstyled list-inline">
							<li><a href="/">Home</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="resources.html">Resources</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li class="signup-link"><a href="#">Sign up now</a></li>
						</ul><!-- /.list-unstyled list-inline -->
					</nav>
				</div><!-- /.col-sm-6 -->

				<div class="col-sm-3">
					<p class="pull-right">&copy; 2016 Justin Joseph</p><!-- /.pull-right -->
				</div><!-- /.col-sm-3 -->
			</div><!-- /.container -->
		</footer>

		<!-- MODAL 
		=========================================================== -->
		<div class="modal fade" id="modal">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" data-dismiss="modal" class="close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>

						<h4 class="modal-title" id="modal-label">
							<i class="fa fa-envelope"> Subscribe to Our Mailing List</i>
						</h4><!-- /.modal-title -->
					</div><!-- /.modal-header -->

					<div class="modal-body">
						<p>
							Simply provide your name and e-mail! As a thank-you for joining, we&rsquo;ll give you one of our best-selling courses, <em>for free!</em>
						</p>

						<form action="" class="form-inline" role="form">
							<div class="form-group">
								<label for="firstname" class="sr-only">First Name</label>
								<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
							</div><!-- /.form-group -->
							<div class="form-group">
								<label for="email" class="sr-only">E-mail</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
							</div><!-- /.form-group -->

							<input type="submit" value="Subscribe!" class="btn btn-danger">
						</form><!-- /.form-inline -->

						<hr>

						<p>
							<small>
								By providing your e-mail you consent to receiving occasional promotional e-mails &amp; newsletters. <br><br>No Spam. Just good stuff. We respect your privacy &amp; you may un-subscribe at any time.
							</small>
						</p>
					</div><!-- /.modal-body -->

				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>

<?php wp_footer(); ?>

	</body>
</html>