<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<link rel='stylesheet' id='agent-focused-pro-css'  href='https://demo.winningagent.com/agent-focused/wp-content/themes/agent-focused-pro/style.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-css'  href='//fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700&#038;ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='ionicons-css'  href='//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='simple-social-icons-font-css'  href='https://demo.winningagent.com/agent-focused/wp-content/plugins/simple-social-icons/css/style.css?ver=2.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='agentfocused-front-page-styles-css'  href='https://demo.winningagent.com/agent-focused/wp-content/themes/agent-focused-pro/style-front.css?ver=1.0' type='text/css' media='all' />
<script type='text/javascript' src='https://demo.winningagent.com/agent-focused/wp-content/themes/agent-focused-pro/js/backstretch-set.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://demo.winningagent.com/agent-focused/wp-content/themes/agent-focused-pro/js/modernizr-custom.js?ver=1.0.0'></script>

<script>
	$(document).ready(function(){
			$('.listing_back_button').addClass(" button"); 
	});
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
