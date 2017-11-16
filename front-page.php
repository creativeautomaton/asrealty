<?php
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


			<div id="search-bar" class="search-bar">

				<div class="wrap">

				<div class="widget-area">
					<section id="property-search-6" class="widget property-search">
						<div class="widget-wrap">
							<form role="search" method="get" id="searchform" action="/property-search/">

								<input value="" name="s" type="hidden">
									  <input value="listing" name="post_type" type="hidden">

										<select name="saleorlease" id="saleorlease" class="agentpress-taxonomy">
											<option value="" selected="selected">For Sale or Lease?</option>
											<option value="2">Sale</option>
											<option value="3">Lease</option>
											<option value="">Both</option>
										</select>

										<select name="priceRange" id="priceRange" class="agentpress-taxonomy">
											<option value="" selected="selected">How Much (Max-min)?</option>
											<option value="under-250k">Under 250K</option>
											<option value="100k-250k">100K-250K</option>
											<option value="500k-750k">500K-750K</option>
											<option value="250k-500k">250K-500K</option>
											<option value="over-750k">Over 750K</option>
										</select>

										<select name="type" id="type" class="agentpress-taxonomy">
											<option value="" selected="selected">What Type of Home?</option>
											<option value="res">Single Family</option>
											<option value="con">Condos / Villas</option>
											<option value="acr">Acreage / Farm</option>
											<option value="lot">Lots / Land</option>
											<option value="mf2,mf5">Multi Family</option>
											<option value="new">New Construction</option>
											<option value="com">Commercial</option>
											<option value="*">ALL</option>
										</select>

										<select name="MinBeds" id="MinBeds" class="agentpress-taxonomy">
											<option value="" selected="selected">How Many Bedrooms?</option>
											<option value="1">1+</option>
											<option value="2">2+</option>
											<option value="3">3+</option>
											<option value="4">4+</option>
											<option value="5">5+</option>
										</select>

										<select name="MinBaths" id="MinBeds" class="agentpress-taxonomy">
											<option value="" selected="selected">How Many Baths?</option>
											<option value="1">1+</option>
											<option value="1.5">1.5+</option>
											<option value="2">2+</option>
											<option value="2.5">2.5+</option>
											<option value="3">3+</option>
											<option value="3.5">3.5+</option>
											<option value="4">4+</option>
											<option value="4.5">4.5+</option>
											<option value="5">5+</option>
											<option value="5.5">5.5+</option>
										</select>

										<select name="where" id="where" class="agentpress-taxonomy">
											<option value="" selected="selected">Where?</option>
											<option value="63139">63139</option>
											<option value="creve coeur">Creve Couer</option>
											<option value="maryland hieghts">Maryland Heights</option>
									</select>

									<input id="searchsubmit" class="searchsubmit" value="Search Homes" type="submit">
							<div class="clear"></div>
						</form>
					</div>
				</section>
		</div>
	</div>
</div>

<div id="front-page-2" class="front-page-2">
		<div class="wrap"><div class="front-page-2-left widget-area">
			<section id="text-8" class="widget widget_text">
				<div class="widget-wrap">
					<div class="textwidget">
						<?php
						// Show the selected frontpage content.
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
								the_content();
							endwhile;
						else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
							get_template_part( 'template-parts/post/content', 'none' );
						endif;
						?>
						 </div>
		</div>
	</section>
</div>
<div class="front-page-2-right widget-area">
	<section id="text-9" class="widget widget_text">
		<div class="widget-wrap">
			<h3 class="widgettitle widget-title">Contact <?php the_field('name'); ?></h3>
			<div class="textwidget">
				<ul class="contact">
					<li><i class="icon ion-location"></i><?php the_field('address'); ?></li>
					<li><i class="icon ion-iphone"></i><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></li>
					<li><i class="icon ion-email"></i><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></li>
				</ul>
			</div>
		</div>
	</section>
</div>
</div>
</div>

<div id="front-page-3" class="front-page-3">
	<div class="wrap">
		<div class="widget-area">
			<section id="featured-listings-5" class="widget featured-listings">
				<div class="widget-wrap">
					<h3 class="widgettitle widget-title">Featured Listings</h3>
					<div class="left post-470 listing type-listing status-publish has-post-thumbnail features-all-hard-wood-floors features-full-finished-basement features-fully-updated features-granite-counter-tops features-patio max-100k-250k max-250k-500k max-500k-750k max-750k-up max-over-750k max-under-250k min-100k-250k min-250k-500k min-500k-750k min-over-750k min-under-250k type-apartment type-single-family-home where-23 where-inverness entry">
						<div class="widget-wrap">
							<div class="listing-wrap">
								<a href="https://demo.winningagent.com/agent-focused/listings/featured-listing-1/"><img src="https://demo.winningagent.com/agent-focused/wp-content/uploads/sites/7/2016/02/house-1-1-460x460.jpg" class="attachment-properties size-properties" alt="" srcset="https://demo.winningagent.com/agent-focused/wp-content/uploads/sites/7/2016/02/house-1-1-460x460.jpg 460w, https://demo.winningagent.com/agent-focused/wp-content/uploads/sites/7/2016/02/house-1-1-150x150.jpg 150w" sizes="(max-width: 460px) 100vw, 460px" height="460" width="460"></a><span class="listing-price">475,450</span><span class="listing-address">1488 Turkey Trail</span><span class="listing-city-state-zip">Inverness, IL 60067</span><a href="https://demo.winningagent.com/agent-focused/listings/featured-listing-1/" class="button more-link button">View Listing</a></div></div></div><div class="right post-476 listing type-listing status-publish has-post-thumbnail features-full-finished-basement features-fully-updated features-patio max-500k-750k min-250k-500k type-single-family-home where-arlington-heights entry"><div class="widget-wrap"><div class="listing-wrap"><a href="https://demo.winningagent.com/agent-focused/listings/featured-listing-2/"><img src="https://demo.winningagent.com/agent-focused/wp-content/uploads/sites/7/2016/02/house-2-1-460x460.jpg" class="attachment-properties size-properties" alt="" srcset="https://demo.winningagent.com/agent-focused/wp-content/uploads/sites/7/2016/02/house-2-1-460x460.jpg 460w, https://demo.winningagent.com/agent-focused/wp-content/uploads/sites/7/2016/02/house-2-1-150x150.jpg 150w" sizes="(max-width: 460px) 100vw, 460px" height="460" width="460"></a><span class="listing-price">499,450</span><span class="listing-address">123 S Dunton Ave</span><span class="listing-city-state-zip">Arlington Heights, IL 60005</span><a href="https://demo.winningagent.com/agent-focused/listings/featured-listing-2/" class="more-link button">View Listing</a></div></div></div><div class="left post-477 listing type-listing status-publish has-post-thumbnail features-full-finished-basement features-fully-updated features-patio max-250k-500k min-100k-250k min-250k-500k type-single-family-home where-barrington entry"><div class="widget-wrap"><div class="listing-wrap"><a href="https://demo.winningagent.com/agent-focused/listings/featured-listing-3/"><img src="https://demo.winningagent.com/agent-focused/wp-content/uploads/sites/7/2016/02/house-3-1-460x460.jpg" class="attachment-properties size-properties" alt="" srcset="https://demo.winningagent.com/agent-focused/wp-content/uploads/sites/7/2016/02/house-3-1-460x460.jpg 460w, https://demo.winningagent.com/agent-focused/wp-content/uploads/sites/7/2016/02/house-3-1-150x150.jpg 150w" sizes="(max-width: 460px) 100vw, 460px" height="460" width="460"></a><span class="listing-price">399,450</span><span class="listing-address">8505 W Park Dr</span><span class="listing-city-state-zip">Barrington, IL 60110</span><a href="https://demo.winningagent.com/agent-focused/listings/featured-listing-3/" class="more-link button">View Listing</a></div></div></div></div></section>
								</div>
					</div>
</div>

<div id="front-page-4" class="front-page-4">
	<div class="wrap">
		<div class="flexible-widgets widget-area widget-full">
			<section id="text-10" class="widget widget_text">
				<div class="widget-wrap">
					<h3 class="widgettitle widget-title">Our Communities</h3>

			<div class="textwidget">
				<div class="one-half first">
					Explore a wide variety of communities, personalize your finishes, and design the perfect home for you.
				</div>

				<div class="one-half">
					<a class="viewall" href="https://demo.winningagent.com/agent-focused/community/">» View All
						<span class="screen-reader-text">of the Communities</span>
					</a>
				</div>

			</div>
		</div>
		</section>
		</div>
	</div>
</div>


<div id="front-page-5" class="front-page-5">

	<div class=" ">
	<div class="widget-area">
		<section id="featured-community-1" class="widget featured-content featured-community">
			<div class="widget-wrap">

				<?php
						$args = array( 'post_type' => 'communities', 'posts_per_page' => 4 );
						$loop = new WP_Query( $args );
						//  // if ( $loop->have_posts() ) :
								while (  $loop->have_posts() ) : $loop->the_post();
				?>

				<article class="post-514 wap-community type-wap-community status-publish has-post-thumbnail wap-community-type-family-friendly wap-community-type-parks entry">
					<a href="https://demo.winningagent.com/agent-focused/community/the-lakelands/" title="The Lakelands" class="wap-community-link">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
						  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<img src="<?php echo $image[0]; ?>" class="entry-image attachment-wap-community" alt="" itemprop="image" height="540" width="1350"></a>
						<?php endif; ?>
					<header class="entry-header">
						<h4 class="entry-title">
							<a href="https://demo.winningagent.com/agent-focused/community/the-lakelands/" title="<?php the_title(); ?> "><?php the_title(); ?> </a>
						</h4>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
					<a href="https://demo.winningagent.com/agent-focused/community/the-lakelands/" class="more-link button">
						» Learn More
						<span class="screen-reader-text">
							about <?php the_title(); ?>
						</span>
						</a>
					</p>
				</div>
			</article>
				<?php
					  endwhile;
						else :
						// endif;
			?>
		</div>
	</section>
	</div>
</div>
</div>
<div id="front-page-6" class="front-page-6">
	<div class="wrap">
		<div class="flexible-widgets widget-area widget-full">
			<section id="text-11" class="widget widget_text">
				<div class="widget-wrap">
					<div class="textwidget">
						<div class="three-fourths first">
							<?php
									// check if the repeater field has rows of data
									if( have_rows('testimonial') ):
									// loop through the rows of data
										while ( have_rows('testimonial') ) : the_row();
												// display a sub field value
										 ?>
										 <img class="alignleft testimonial" src="<?php the_sub_field('photo');  ?>">
										 <?php the_sub_field('quote');   ?>
										 <br>
										 <cite>– <?php the_sub_field('name');  ?></cite>
										<?php
										endwhile;
									else :
										// no rows found
									endif;
							?>
					</div>
					<div class="one-fourth">
							<a class="alignright button" href="/testimonials">Read More</a>
						</div>
					</div>
		</div>
	</section>
</div>
</div>
</div>

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
