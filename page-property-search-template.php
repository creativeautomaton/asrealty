<?php
	/* Template Name: Property Search Template */
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">



		<section class="hidden">
					 <link type="text/css" rel="stylesheet" href="http://www.marissearch.com/basic.css" />
		<script type="text/javascript"> document.write('<div id="listing_widget_74379e4db9dfa5385f7f38f7e9463d9a"></div>'); (function() {
		var wc = document.createElement('script');
		wc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'www.marissearch.com/?id=listing_widget_74379e4db9dfa5385f7f38f7e9463d9a&iden=15091-4d9c70f6d0&AuthKey=e0d7b67499421bf5dd52b3eb0879a1bf&street=1&city=1&county=1&mlsArea=1&mls=1&price=1&bedbaths=1&stypes=1&label=Search&titles=1&rand='+Math.random();
		wc.setAttribute('async','true'); document.documentElement.firstChild.appendChild(wc);
		})();
		</script>

		</section>

		<?php // Show the selected frontpage content.
		// if ( have_posts() ) :
		// 	while ( have_posts() ) : the_post();
		// 		get_template_part( 'template-parts/page/content', 'front-page' );
		// 	endwhile;
		// else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
		// 	get_template_part( 'template-parts/post/content', 'none' );
		// endif;
		?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>



	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
