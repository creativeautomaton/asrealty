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
<!-- <script type='text/javascript' src='https://demo.winningagent.com/agent-focused/wp-content/themes/agent-focused-pro/js/backstretch-set.js?ver=1.0.0'></script> -->
<script type='text/javascript' src='https://demo.winningagent.com/agent-focused/wp-content/themes/agent-focused-pro/js/modernizr-custom.js?ver=1.0.0'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
			// $('*').hasClass('listing_back_button').addClass(" button");
			console.log('loaded jquery');
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


	<header class="  nav-wrapper" itemscope="" itemtype="https://schema.org/WPHeader"><div class="wrap"><div class="title-area"><p class="site-title" itemprop="headline"><a href="https://demo.winningagent.com/agent-focused/">Agent Focused</a></p><p class="site-description" itemprop="description">A WordPress Real Estate Theme for the Genesis Framework</p></div><h2 class="screen-reader-text">Main navigation</h2><button class="menu-toggle nav-primary" aria-expanded="false" aria-pressed="false" role="button" id="mobile-genesis-nav-primary">Menu</button><nav class="nav-primary" itemscope="" itemtype="https://schema.org/SiteNavigationElement" id="genesis-nav-primary" aria-label="Main navigation" style=""><ul id="menu-header-menu" class="menu genesis-nav-menu menu-primary js-superfish" style="touch-action: auto;"><li id="menu-item-753" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-753"><a href="https://demo.winningagent.com/agent-focused/theme-features/" itemprop="url" class=""><span itemprop="name">Theme Features</span></a>
<button class="sub-menu-toggle" aria-expanded="false" aria-pressed="false" role="button"><span class="screen-reader-text">Menu</span></button><ul class="sub-menu" style="">
	<li id="menu-item-850" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-850"><a href="https://demo.winningagent.com/agent-focused/theme-features/" itemprop="url"><span itemprop="name">What’s Included</span></a></li>
	<li id="menu-item-754" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-754"><a href="https://demo.winningagent.com/agent-focused/theme-customizer/" itemprop="url"><span itemprop="name">Theme Customizer</span></a></li>
	<li id="menu-item-749" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-749"><a href="https://demo.winningagent.com/agent-focused/typography/" itemprop="url"><span itemprop="name">Typography</span></a></li>
</ul>
</li>
<li id="menu-item-768" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-768"><a href="https://demo.winningagent.com/agent-focused/templates/" itemprop="url" class=""><span itemprop="name">Templates</span></a>
<button class="sub-menu-toggle" aria-expanded="false" aria-pressed="false" role="button"><span class="screen-reader-text">Menu</span></button><ul class="sub-menu" style="">
	<li id="menu-item-757" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-757"><a href="https://demo.winningagent.com/agent-focused/standard-wordpress-pages/" itemprop="url" class=""><span itemprop="name">Standard Pages</span></a>
	<button class="sub-menu-toggle" aria-expanded="false" aria-pressed="false" role="button"><span class="screen-reader-text">Menu</span></button><ul class="sub-menu" style="">
		<li id="menu-item-739" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-739"><a href="https://demo.winningagent.com/agent-focused/templates/archive/" itemprop="url"><span itemprop="name">Archive Page</span></a></li>
		<li id="menu-item-732" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-732"><a href="https://demo.winningagent.com/agent-focused/author/agent/" itemprop="url"><span itemprop="name">Author Page</span></a></li>
		<li id="menu-item-745" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-745"><a href="https://demo.winningagent.com/agent-focused/threaded-comments/" itemprop="url"><span itemprop="name">Blog Post</span></a></li>
		<li id="menu-item-737" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-737"><a href="https://demo.winningagent.com/agent-focused/client-tips/" itemprop="url"><span itemprop="name">Category Page</span></a></li>
		<li id="menu-item-820" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-820"><a href="https://demo.winningagent.com/agent-focused/templates/landing-page/" itemprop="url"><span itemprop="name">Landing Page</span></a></li>
		<li id="menu-item-748" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-748"><a href="https://demo.winningagent.com/agent-focused/templates/sample/" itemprop="url"><span itemprop="name">Sample Page</span></a></li>
		<li id="menu-item-746" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-746"><a href="https://demo.winningagent.com/agent-focused/templates/columns/" itemprop="url"><span itemprop="name">Column Page</span></a></li>
	</ul>
</li>
	<li id="menu-item-756" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-756"><a href="https://demo.winningagent.com/agent-focused/real-estate-pages/" itemprop="url" class=""><span itemprop="name">Real Estate Pages</span></a>
	<button class="sub-menu-toggle" aria-expanded="false" aria-pressed="false" role="button"><span class="screen-reader-text">Menu</span></button><ul class="sub-menu" style="">
		<li id="menu-item-731" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-731"><a href="https://demo.winningagent.com/agent-focused/listings/" itemprop="url"><span itemprop="name">Featured Listings</span></a></li>
		<li id="menu-item-733" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-733"><a href="https://demo.winningagent.com/agent-focused/listings/featured-listing-1/" itemprop="url"><span itemprop="name">Single Listing</span></a></li>
		<li id="menu-item-734" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-734"><a href="https://demo.winningagent.com/agent-focused/community/" itemprop="url"><span itemprop="name">Communities</span></a></li>
		<li id="menu-item-747" class="menu-item menu-item-type-post_type menu-item-object-wap-community menu-item-747"><a href="https://demo.winningagent.com/agent-focused/community/the-kingswoods/" itemprop="url"><span itemprop="name">Single Community</span></a></li>
		<li id="menu-item-868" class="menu-item menu-item-type-taxonomy menu-item-object-wap-community-type menu-item-868"><a href="https://demo.winningagent.com/agent-focused/community/type/family-friendly/" itemprop="url"><span itemprop="name">Community Type</span></a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-736" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-736"><a href="https://demo.winningagent.com/agent-focused/layouts/" itemprop="url" class=""><span itemprop="name">Page Layouts</span></a>
<button class="sub-menu-toggle" aria-expanded="false" aria-pressed="false" role="button"><span class="screen-reader-text">Menu</span></button><ul class="sub-menu" style="">
	<li id="menu-item-740" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-740"><a href="https://demo.winningagent.com/agent-focused/layouts/cs/" itemprop="url"><span itemprop="name">Content/Sidebar</span></a></li>
	<li id="menu-item-742" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-742"><a href="https://demo.winningagent.com/agent-focused/layouts/sc/" itemprop="url"><span itemprop="name">Sidebar/Content</span></a></li>
	<li id="menu-item-741" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-741"><a href="https://demo.winningagent.com/agent-focused/layouts/fwc/" itemprop="url"><span itemprop="name">Full Width Content</span></a></li>
</ul>
</li>
<li id="menu-item-744" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-735 current_page_item menu-item-744"><a href="https://demo.winningagent.com/agent-focused/blog/" itemprop="url"><span itemprop="name">Blog</span></a></li>
<li id="menu-item-755" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-755"><a href="https://demo.winningagent.com/agent-focused/idx-integration/" itemprop="url"><span itemprop="name">IDX Integration</span></a></li>
<li id="menu-item-743" class="last menu-item menu-item-type-post_type menu-item-object-page menu-item-743"><a href="https://demo.winningagent.com/agent-focused/contact/" itemprop="url"><span itemprop="name">Contact</span></a></li>
<li id="menu-item-877" class="add-color menu-item menu-item-type-custom menu-item-object-custom menu-item-877"><a href="https://my.winningagent.com/downloads/agent-focused-pro-theme/" itemprop="url"><span itemprop="name">» Purchase Theme</span></a></li>
</ul></nav></div></header>


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
