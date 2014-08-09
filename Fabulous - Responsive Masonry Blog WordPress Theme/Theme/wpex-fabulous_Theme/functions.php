<?php
/**
 * Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Fabulous WPExplorer Theme
 * @since Fabulous 1.0
 */



/**
	Constants
 **/
define( 'WPEX_JS_DIR_URI', get_template_directory_uri().'/js' );
define( 'WPEX_THEME_BRANDING', get_theme_mod( 'wpex_theme_branding', 'FAB' ) );

/**
	Theme Setup
 **/
if ( ! isset( $content_width ) ) $content_width = 650;

// Theme setup - menus, theme support, etc
require_once( get_template_directory() .'/functions/theme-setup.php' );

// Recommend plugins for use with this theme
require_once ( get_template_directory() .'/functions/recommend-plugins.php' );



/**
	Theme Customizer
 **/

// Header Options
require_once ( get_template_directory() .'/functions/theme-customizer/header.php' );

// General Options
require_once ( get_template_directory() .'/functions/theme-customizer/general.php' );

// Styling Options
require_once ( get_template_directory() .'/functions/theme-customizer/styling.php' );

// Image resizing Options
require_once ( get_template_directory() .'/functions/theme-customizer/image-sizes.php' );


/**
	Includes
 **/

// Define widget areas & custom widgets
require_once( get_template_directory() .'/functions/widgets/widget-areas.php' );
require_once( get_template_directory() .'/functions/widgets/widget-flickr.php' );
require_once( get_template_directory() .'/functions/widgets/widget-social.php' );
require_once( get_template_directory() .'/functions/widgets/widget-video.php' );
require_once( get_template_directory() .'/functions/widgets/widget-posts-thumbnails.php' );

// Admin only functions
if ( is_admin() ) {

	// Default meta options usage
	require_once( get_template_directory() .'/functions/meta/usage.php' );

	// Post editor tweaks
	require_once( get_template_directory() .'/functions/mce.php' );

	// Gallery Metabox
	require_once( get_template_directory() .'/functions/meta/gallery-metabox/gmb-admin.php' );

// Non admin functions
} else {

	// Gallery Metabox
	require_once( get_template_directory() .'/functions/meta/gallery-metabox/gmb-display.php' );

	// Function that returns correct grid class for specific column number
	require_once( get_template_directory() .'/functions/grid.php' );

	// Outputs the main site logo
	require_once( get_template_directory() .'/functions/logo.php' );

	// Loads front end css and js
	require_once( get_template_directory() .'/functions/scripts.php' );

	// Image resizing script
	require_once( get_template_directory() .'/functions/aqua-resizer.php' );

	// Show or hide sidebar accordingly
	require_once( get_template_directory() .'/functions/sidebar-display.php' );

	// Returns the correct image sizes for cropping
	require_once( get_template_directory() .'/functions/featured-image.php' );

	// Comments output
	require_once( get_template_directory() .'/functions/comments-callback.php' );

	// Pagination output
	require_once( get_template_directory() .'/functions/pagination.php' );

	// Custom excerpts
	require_once( get_template_directory() .'/functions/excerpts.php' );

	// Alter posts per page for various archives
	require_once( get_template_directory() .'/functions/posts-per-page.php' );

	// Outputs the footer copyright
	require_once( get_template_directory() .'/functions/copyright.php' );

	// Outputs post meta (date, cat, comment count)
	require_once( get_template_directory() .'/functions/post-meta.php' );

	// Used for next/previous links on single posts
	require_once( get_template_directory() .'/functions/next-prev.php' );

	// Outputs the post format video
	require_once( get_template_directory() .'/functions/post-video.php' );

	// Outputs the post format audio
	require_once( get_template_directory() .'/functions/post-audio.php' );

	// Outputs post author bio
	require_once( get_template_directory() .'/functions/post-author.php' );

	// Outputs post slider
	require_once( get_template_directory() .'/functions/post-gallery.php' );

	// Adds classes to entries
	require_once( get_template_directory() .'/functions/post-classes.php' );

	// Adds a mobile search to the sidr container
	require_once( get_template_directory() .'/functions/mobile-search.php' );

	// Custom WP Gallery Output
	if ( get_theme_mod( 'wpex_custom_wp_gallery_output', '1' ) ) {
		require_once( get_template_directory() .'/functions/wp-gallery.php' );
	}

	// Page featured images
	require_once( get_template_directory() .'/functions/page-featured-image.php' );

	// Post featured images
	require_once( get_template_directory() .'/functions/post-featured-image.php' );

	// Breadcrumbs
	require_once( get_template_directory() .'/functions/breadcrumbs.php' );

	// Pre_get_posts filter tweaks
	require_once( get_template_directory() .'/functions/pre-get-posts.php' );

	// Scroll top link
	require_once( get_template_directory() .'/functions/scroll-top-link.php' );

	// Body Classes
	require_once( get_template_directory() .'/functions/body-classes.php' );

	// Outputs content for quote format
	require_once( get_template_directory() .'/functions/quote-content.php' );

}