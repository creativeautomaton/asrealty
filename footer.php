<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">

				<?php get_template_part( 'template-parts/footer/footer', 'widgets' );?>
					 
						<?php wp_nav_menu( array(
							'menu'  => 'Footer',
							'menu_id' => 'menu-header-menu',
							'depth'          => 1 ,
							'menu_class' => 'menu genesis-nav-menu menu-primary js-superfish sf-js-enabled sf-arrows'
						) );  ?>

				<?php 	get_template_part( 'template-parts/footer/site', 'info' ); ?>

			     <p>
						 Copyright ©&nbsp;2017 · <a href="/" target="_blank"> Arling and Swyers Group</a> by <a href="http://www.creativeautomaton.com" target="_blank">creative Automaton</a>
					 </p>
				 </div>
			 </footer>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
