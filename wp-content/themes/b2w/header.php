<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'b2w' ); ?></a>

			<!-- HEADER 
			=========================================================== -->		
			<header class="site-header" role="banner">

				<!-- NAVBAR 
				=========================================================== -->
				<div class="navbar-wrapper">
					<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
						<div class="container">
							<div class="navbar-header">
								<button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle">
									<span class="sr-only">Toggle Navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<a href="/" class="navbar-brand"><img src="assets/img/logo.png" alt="Bootstrap to WordPress"></a>
							</div><!-- /.navbar-header -->

							<!-- If the WP admin menu is not activated, then the 'menu_class' is applie to 'container.' In other words, it overwrites the 'container_class' Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug -->
							<?php

								wp_nav_menu( array(
									'theme_location' 	=> 'primary',
									'container' 			=> 'nav',
									'container_class' => 'navbar-collapse collapse',
									'menu_class' 			=> 'nav navbar-nav navbar-right'
								) );

							?>
							
						</div><!-- /.container -->
					</div><!-- /.navbar navbar-inverse navbar-fixed-top -->
				</div><!-- /.navbar-wrapper -->

			</header>