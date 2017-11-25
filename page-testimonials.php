<?php
	/* Template Name: Testimonials Template */
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

		<section>
        <?php
            $args = array( 'post_type' => 'client-testimonials', 'posts_per_page' => 10 );
            $loop = new WP_Query( $args );
             if ( $loop->have_posts() ) :
                while (  $loop->have_posts() ) : $loop->the_post();
        ?>
                  <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                     <img src="<?php echo $image[0]; ?>" class="alignleft testimonial" alt="" itemprop="image" height="540" width="1350"></a>
                   <?php endif; ?>
                   <?php the_content(); ?>
                 <br>
                 <cite>– <?php the_title(); ?></cite>
      <?php
          endwhile; else : endif;
          wp_reset_postdata();
      ?>
		</section>



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
