<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Fabulous WPExplorer Theme
 * @since Fabulous 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( get_theme_mod('wpex_custom_favicon') ) { ?>
		<link rel="shortcut icon" href="<?php echo get_theme_mod('wpex_custom_favicon'); ?>" />
	<?php } ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="wrap" class="clr">

		<div id="header-wrap" class="clr">
			<header id="header" class="site-header clr container" role="banner">
				<?php
				// Outputs the site logo
				// See functions/logo.php
				wpex_logo(); ?>
			</header><!-- #header -->
		</div><!-- #header-wrap -->

		<div id="site-navigation-wrap" class="clr <?php if ( get_theme_mod( 'wpex_fixed_nav', '1' ) && !wp_is_mobile() ) echo 'sticky-nav'; ?>">
			<div id="site-navigation-inner" class="clr">
				<nav id="site-navigation" class="navigation main-navigation clr container" role="navigation">
					<a href="#mobile-nav" class="navigation-toggle"><span class="fa fa-bars navigation-toggle-icon"></span><span class="navigation-toggle-text"><?php echo get_theme_mod( 'wpex_mobile_menu_open_text', __( 'Click here to navigate', 'wpex' ) ); ?></span></a>
					<?php
					// Display main menu
					wp_nav_menu( array(
						'theme_location'	=> 'main_menu',
						'sort_column'		=> 'menu_order',
						'menu_class'		=> 'main-nav dropdown-menu sf-menu',
						'fallback_cb'		=> false,
					) ); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #site-navigation-inner -->
		</div><!-- #site-navigation-wrap -->

		<div class="site-main-wrap clr">
			<div id="main" class="site-main clr container">
			<?php
			// Breadcrumbs
			wpex_display_breadcrumbs(); ?>