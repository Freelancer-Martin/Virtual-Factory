<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Virtul_Factory
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="description" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	<link rel="description" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
	<link rel="description" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="description" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'virtul-factory' ); ?></a>

	<header id="masthead" class="site-header">

			<div class="header-blue">
					<nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
								<?php
										the_custom_logo();
										if ( is_front_page() && is_home() ) :
											?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
											<?php
										else :
											?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
											<?php
										endif;
										$virtul_factory_description = get_bloginfo( 'description', 'display' );
										if ( $virtul_factory_description || is_customize_preview() ) :
									?>
									<p class="site-description"><?php echo $virtul_factory_description; /* WPCS: xss ok. */ ?></p>
								<?php endif; ?>
									<div class="collapse navbar-collapse"
											id="navcol-1">
											<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'virtul-factory' ); ?></button>
											<?php
											wp_nav_menu( array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
											) );
											?>
											<form class="form-inline mr-auto" target="_self">
													<div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
											</form><a class="btn btn-light action-button" role="button" href="<?php echo esc_url( home_url( '/wp-login.php' ) ); ?>">Sign In</a></div>
							</div>
					</nav>
	</div>






	</header><!-- #masthead -->

	<div id="content" class="site-content">
