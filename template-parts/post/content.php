<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


<article class="post-447 post type-post status-publish format-standard has-post-thumbnail category-category-1 tag-images-left entry" itemscope="" itemtype="https://schema.org/CreativeWork">
			<header class="entry-header">
						<h2 class="entry-title" itemprop="headline">
							<a href="https://demo.winningagent.com/agent-focused/image-aligned-left/" rel="bookmark">Sample Post With Image Aligned Left</a>
						</h2>
						<p class="entry-meta">
							<time class="entry-time" itemprop="datePublished" datetime="2013-09-01T01:57:05+00:00">September 1, 2013</time>
							By <span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person">
								<a href="https://demo.winningagent.com/agent-focused/author/agent/" class="entry-author-link" itemprop="url" rel="author">
									<span class="entry-author-name" itemprop="name">Jennifer</span>
								</a>
							</span>
						</p>
		</header>

		<div class="entry-content" itemprop="text">
					<a class="entry-image-link" href="https://demo.winningagent.com/agent-focused/image-aligned-left/" aria-hidden="true"><img src="https://demo.winningagent.com/agent-focused/wp-content/uploads/sites/7/2013/09/Sidecar_Business-04-1350-900x450.jpg" class=" post-image entry-image" alt="Sample Post With Image Aligned Left" itemprop="image" height="450" width="900"></a>
					<p>
						This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like.

						  This is an example of a WordPress post, you could edit this to put information about yourself or your  ... <a href="https://demo.winningagent.com/agent-focused/image-aligned-left/" class="more-link">
							» Learn More
					<span class="screen-reader-text">about  Sample Post With Image Aligned Left</span>
				</a>
				</p>

		<meta itemprop="dateModified" content="2016-05-18T21:28:33+00:00">
		<meta itemprop="mainEntityOfPage" content="https://demo.winningagent.com/agent-focused/image-aligned-left/">
		</div>

		<footer class="entry-footer">
			<p class="entry-meta">
				<span class="entry-categories">Filed Under:
					<a href="https://demo.winningagent.com/agent-focused/category-1/" rel="category tag">Category #1</a>
				</span>
				<span class="entry-tags">Tagged With:
					<a href="https://demo.winningagent.com/agent-focused/tag/images-left/" rel="tag">Images Left</a>
				</span>
			</p>
		</footer>
</article>
















<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
				} else {
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
