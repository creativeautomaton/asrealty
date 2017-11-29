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
      $('.menu-toggle').on('click', function(){
          $('.nav-primary').toggle();
           $(this).show();
      });

			$('.listing_more_photos').on('click', function(){
						console.log('clicked more photos link')
						// setTimeout(function () {
						// 		$('.listing_more_photos_container').each( function(){
						// 			$(this).prepend('<span class="previous-arrrow"> < </span>');
						// 			$(this).append('<span class="next-arrrow"> > </span>');
						// 		});
						// }, 1500)
			});
			// $('.listing_more_photos').on('click', function(e){
			//   console.log('hovered over more photos link')
			// });


			function morePhotosSlider(){
				$(".listing_more_photos_container > img:gt(0)").hide();

				$('.next-arrow').on('click', function(){
						$('.listing_more_photos_container > img:first')
						 .fadeOut(1000)
						 .next()
						 .fadeIn(1000)
						 .end()
						 .appendTo('.listing_more_photos_container');
				});

				$('.prev-arrow').on('click', function(){
						$('.listing_more_photos_container > img:first')
						 .fadeOut(1000)
						 .previous()
						 .fadeIn(1000)
						 .end()
						 .appendTo('.listing_more_photos_container');
				});
			}



			// setInterval(function() {
			//   $('.listing_more_photos_container > img:first')
			//     .fadeOut(1000)
			//     .next()
			//     .fadeIn(1000)
			//     .end()
			//     .appendTo('.listing_more_photos_container');
			// }, 3000);

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


	<header class="  nav-wrapper" itemscope="" itemtype="https://schema.org/WPHeader">
    <div class="wrap">
      		<div class="title-area">
      			<p class="site-title" itemprop="headline">
      				<div class="site-branding-text">
      					<?php if ( is_front_page() ) : ?>
      						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      					<?php else : ?>
      						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
      					<?php endif; ?>

      					<?php
      					$description = get_bloginfo( 'description', 'display' );

      					if ( $description || is_customize_preview() ) :
      					?>
      						<p class="site-description"><?php echo $description; ?></p>
      					<?php endif; ?>
      				</div><!-- .site-branding-text -->
      			</p>
       		</div>

        <!-- <button class="menu-toggle nav-primary " aria-pressed="false" role="button" id="mobile-genesis-nav-primary" >
            	<span class="screen-reader-text">Menu</span>
        </button> -->

    		<h2 class="screen-reader-text">Main navigation</h2>
    			<button class="menu-toggle nav-primary" aria-expanded="false" aria-pressed="false" role="button" id="mobile-genesis-nav-primary">Menu</button>

        <nav class="nav-primary" itemscope="" itemtype="https://schema.org/SiteNavigationElement" id="genesis-nav-primary" aria-label="Main navigation" style="">
    			<?php wp_nav_menu( array(
    				'menu'  => 'Main Menu',
    				'menu_id' => 'menu-header-menu',
    				'menu_class' => 'menu genesis-nav-menu menu-primary js-superfish sf-js-enabled sf-arrows'
    		 	) );  ?>
    		</nav>
</div>

</header>


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
