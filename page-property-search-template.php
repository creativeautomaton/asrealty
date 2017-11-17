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
<?php
		// s=&post_type=listing&max=250k-500k&min=100k-250k&type=apartment&where=60067
		$listingType =  isset( $_GET['post_type'] ) ;
		$saleOrLease =  isset(  $_GET['saleorlease'] );
		$priceRange = isset( $_GET['priceRange'] );
		$propertyType = isset( $_GET['type']) ;
		$cityZip = isset( $_GET['where'] );
		$beds = isset( $_GET['MinBeds']) ;
		$baths = isset( $_GET['MinBaths'] );
		echo $baths .' '. $beds .' '. $saleOrLease .'  '. $listingType .'  '. $priceRange  .' '. $propertyType .' '. $cityZip;
?>

<script>
	 $(document).ready(function() {
			 function getSearch(){
					 var propType = <?php echo '"' . $propertyType . '"'; ?> ;
					 var listingType = <?php echo '"' . $listingType . '"'; ?> ;
			 		 var priceRange = <?php echo '"' . $priceRange . '"'; ?> ;
			 		 var propertyType = <?php echo '"' . $propertyType . '"'; ?> ;
			 		 var cityZip = <?php echo '"' .  $cityZip . '"'; ?> ;
					 var saleOrLease = <?php echo '"' .  $saleOrLease . '"'; ?>;
					 var baths = <?php echo '"' .  $baths . '"'; ?>;
					 var beds = <?php echo '"' .  $beds . '"'; ?>;

					 $(".propType option").filter(function() {  return $(this).val() == propType;  }).attr('selected', true);
					 $("select[name*='MinBeds'] option").filter(function() {  return $(this).val() == beds;  }).attr('selected', true);
					 $("select[name*='MinBath'] option").filter(function() {  return $(this).val() == baths;  }).attr('selected', true);

					 priceRange = priceRange.split('');
					 console.log(priceRange);


					 $("input[name*='MinPrice']").val(priceRange);
					 $("input[name*='MaxPrice']").val(priceRange);
					 $("input[name*='City']").val(cityZip);



					 console.log( 'loaded getSearch ');
			 }
			 setTimeout(function () {
			 		getSearch();
			 }, 500);

			 var listingsArray = [];
			 $('.propSearchBtns').on('click', function(){

				 $('.listing_block').each( function(i){
					 		var image =  $('.listing_photo img', this).attr('src');
							var mls =  $('.mls_data', this).text();
							var prop_type_data =  $('.prop-type_data', this).text();
							var price_data =  $('.price_data', this).text();
							var area_data =  $('.area_data', this).text();
							var address_data =  $('.address_data', this).text();
							var addresscont_data =  $('.addresscont_data', this).text();
							var county_data =  $('.county_data', this).text();
							var beds_baths_data =  $('.beds-baths_data', this).text();
							var sqft_data =  $('.sqft_data', this).text();



						 listingsArray.push({image, mls, prop_type_data, area_data});

				 });
				  console.log(listingsArray);
			 });


		});
</script>


		<section class="hidden">
					 <!-- <link type="text/css" rel="stylesheet" href="http://www.marissearch.com/basic.css" /> -->
			<!--  Maris script -->
			<script type="text/javascript">
					document.write('<div id="listing_widget_74379e4db9dfa5385f7f38f7e9463d9a"></div>'); (function() {
							var wc = document.createElement('script');
							wc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'www.marissearch.com/?id=listing_widget_74379e4db9dfa5385f7f38f7e9463d9a&iden=15091-4d9c70f6d0&AuthKey=e0d7b67499421bf5dd52b3eb0879a1bf&street=1&city=1&county=1&mlsArea=1&mls=1&price=1&bedbaths=1&stypes=1&label=Search&titles=1&rand='+Math.random();
							wc.setAttribute('async','true'); document.documentElement.firstChild.appendChild(wc);
					})();
					console.log('loaded maris search');
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
