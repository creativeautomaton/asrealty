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

		// $listingType
		if (isset( $_GET['post_type'] ) && !empty( $_GET['post_type'] ) ) {
			$listingType = $_GET['post_type'];
		}else{
		 	$listingType = null;
		}
		if (isset( $_GET['saleorlease'] ) && !empty( $_GET['saleorlease'] ) ) {
			$saleOrLease = $_GET['saleorlease'];
		}else{
		 	$saleOrLease = null;
		}
		if (isset( $_GET['priceRange'] ) && !empty( $_GET['priceRange'] ) ) {
			$priceRange = $_GET['priceRange'];
		}else{
		  $priceRange = null;
		}
		if (isset( $_GET['type'] ) && !empty( $_GET['type'] ) ) {
			$propertyType = $_GET['type'];
		}else{
		  $propertyType = null;
		}
		if (isset( $_GET['where'] ) && !empty( $_GET['where'] ) ) {
			$cityZip = $_GET['where'];
		}else{
		  $cityZip = null;
		}
		if (isset( $_GET['MinBeds'] ) && !empty( $_GET['MinBeds'] ) ) {
		 $beds = $_GET['MinBeds'];
		 }else{
			 $beds = null;
		 }
		 if (isset( $_GET['MinBaths'] ) && !empty( $_GET['MinBaths'] ) ) {
 		  $baths = $_GET['MinBaths'];
 		 }else{
 			 $baths = null;
 		 }

		// echo $baths .' '. $beds .' '. $saleOrLease .'  '. $listingType .'  '. $priceRange  .' '. $propertyType .' '. $cityZip;
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

					 // priceRange functions
					 priceRange =  priceRange.split('-') ;
					 var priceRangeLow = priceRange[0];
					 var priceRangeHigh = priceRange[1];
					 console.log(priceRange);
					 $("input[name*='MinPrice']").val(priceRangeLow + '000');
					 $("input[name*='MaxPrice']").val(priceRangeHigh + '000');


					 // City listing
					 var cities = [];
					 var citiesSplit = $('.zip-cities-list').text().split(' ');
					 var citiesSplit2 = citiesSplit.split(',');
					 for (var i = 160; citiesSplit2.length > i; i++) {
					 	   cities.push(citiesSplit2[i]);
					 }
					 console.log(cities);
					 $("input[name*='City']").val(cityZip);
					 console.log( 'loaded getSearch ');

					 $('.propSearchBtns input').trigger('click');
			 }
			 setTimeout(function () {
			 		getSearch();
			 }, 500);
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
						// setInterval(function() {
						 //   $('.listing_more_photos_container > img:first')
						 //     .fadeOut(1000)
						 //     .next()
						 //     .fadeIn(1000)
						 //     .end()
						 //     .appendTo('.listing_more_photos_container');
					 // }, 3000);
			 }

			 var listingsArray = [];
			 $('.propSearchBtns').on('click', function(){

				 setTimeout(function () {
								 $('.listing_block').each( function(i){
									 		var image =  $('.listing_photo img', this).attr('src');
											var mls =  $('.mls_data', this).text().trim();
											var prop_type_data =  $('.prop-type_data', this).text().trim();
											var price_data =  $('.price_data', this).text().trim();
											var area_data =  $('.area_data', this).text().trim();
											var address_data =  $('.address_data', this).text().trim();
											var addresscont_data =  $('.addresscont_data', this).text().trim();
											var county_data =  $('.county_data', this).text().trim();
											var beds_baths_data =  $('.beds-baths_data', this).text().trim();
											var sqft_data =  $('.sqft_data', this).text().trim();
											$('.listing_more_photos').attr('mls', mls);

										 listingsArray.push({
											 		 'id': i,
													 image,
													 mls,
													 prop_type_data,
													 area_data,
													 address_data,
													 addresscont_data,
													 county_data,
													 beds_baths_data,
													 sqft_data
										 });
									});
									var morePhotosArray = [];
									$('.listing_more_photos').on('click', function(){
											 var mlsNum = $('.listing_more_photos', this).attr('mls');
											 var largeImg = $('#listing_photoblock_' + mlsNum).attr('photos');
											 setTimeout(function () {
							 								$('.listing_more_photos_container').each( function(){
							 									$(this).prepend('<span class="previous-arrow">   </span>');
							 									$(this).append('<span class="next-arrow">   </span>');
							 								});

															$(".listing_more_photos_container > img:gt(0)").hide()

															$('.next-arrow').on('click', function(){
																  console.log('clicked next');
																	$('.listing_more_photos_container > img:first')
																	 .fadeOut(500)
																	 .next()
																	 .fadeIn(500)
																	 .end()
																	 .appendTo('.listing_more_photos_container');
															})

															$('.previous-arrow').on('click', function(){
																  console.log('clicked previous');
																	var lastImg = $('.listing_more_photos_container > img').last();
																	console.log(lastImg);
																	$('.listing_more_photos_container > img:first').fadeOut(500);
																	$(lastImg).fadeIn(500).appendTo('.listing_more_photos_container');
															})
					 						}, 300)


											 // console.log(largeImg);

											 // .each( function(img){
												// 		var image = $('.listing_image_large img', this).attr('src');
												// 		morePhotosArray.push( image );
												// 		console.log(morePhotosArray);
											 // });

									});

				 		 }, 700);
						 setTimeout(function () {
								 for (var i = 0; i < listingsArray.length; i++) {
									  var listingBlockMLS = 'listing_block_'+ listingsArray[i].mls;
									  // realoms_show_listing_photos( 'listing_block_'+ listingBlockMLS +', listing_photoblock_'+ listingBlockMLS );
								 	  // console.log(listingBlockMLS);
								 }
						  }, 700);
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

<span class="hidden zip-cities-list" >
62001 Alhambra, IL
62002 Alton, IL
62006 Batchtown, IL
62009 Benld, IL
62010 Bethalto, IL
62011 Bingham, IL
62012 Brighton, IL
62013 Brussels, IL
62014 Bunker Hill, IL
62015 Butler, IL
62016 Carrollton, IL
62017 Coffeen, IL
62018 Cottage Hills, IL
62019 Donnellson, IL
62021 Dorsey, IL
62022 Dow, IL
62023 Eagarville, IL
62024 East Alton, IL
62025 Edwardsville, IL
62026 Edwardsville, IL
62027 Eldred, IL
62028 Elsah, IL
62030 Fidelity, IL
62031 Fieldon, IL
62032 Fillmore, IL
62033 Gillespie, IL
62034 Glen Carbon, IL
62035 Godfrey, IL
62036 Golden Eagle, IL
62037 Grafton, IL
62040 Granite City, IL
62044 Greenfield, IL
62045 Hamburg, IL
62046 Hamel, IL
62047 Hardin, IL
62048 Hartford, IL
62049 Hillsboro, IL
62050 Hillview, IL
62051 Irving, IL
62052 Jerseyville, IL
62053 Kampsville, IL
62054 Kane, IL
62056 Litchfield, IL
62058 Livingston, IL
62059 Lovejoy, IL
62060 Madison, IL
62061 Marine, IL
62062 Maryville, IL
62063 Medora, IL
62065 Michael, IL
62067 Moro, IL
62069 Mount Olive, IL
62070 Mozier, IL
62071 National Stock Yards, IL
62074 New Douglas, IL
62075 Nokomis, IL
62076 Ohlman, IL
62077 Panama, IL
62078 Patterson, IL
62079 Piasa, IL
62080 Ramsey, IL
62081 Rockbridge, IL
62082 Roodhouse, IL
62083 Rosamond, IL
62084 Roxana, IL
62085 Sawyerville, IL
62086 Sorento, IL
62087 South Roxana, IL
62088 Staunton, IL
62089 Taylor Springs, IL
62090 Venice, IL
62091 Walshville, IL
62092 White Hall, IL
62093 Wilsonville, IL
62094 Witt, IL
62095 Wood River, IL
62097 Worden, IL
62098 Wrights, IL
62201 East Saint Louis, IL
62202 East Saint Louis, IL
62203 East Saint Louis, IL
62204 East Saint Louis, IL
62205 East Saint Louis, IL
62206 East Saint Louis, IL
62207 East Saint Louis, IL
62208 Fairview Heights, IL
62214 Addieville, IL
62215 Albers, IL
62216 Aviston, IL
62217 Baldwin, IL
62218 Bartelso, IL
62219 Beckemeyer, IL
62220 Belleville, IL
62221 Belleville, IL
62222 Belleville, IL
62223 Belleville, IL
62224 Mascoutah, IL
62225 Scott Air Force Base, IL
62226 Belleville, IL
62230 Breese, IL
62231 Carlyle, IL
62232 Caseyville, IL
62233 Chester, IL
62234 Collinsville, IL
62236 Columbia, IL
62237 Coulterville, IL
62238 Cutler, IL
62239 Dupo, IL
62240 East Carondelet, IL
62241 Ellis Grove, IL
62242 Evansville, IL
62243 Freeburg, IL
62244 Fults, IL
62245 Germantown, IL
62246 Greenville, IL
62247 Hagarstown, IL
62248 Hecker, IL
62249 Highland, IL
62250 Hoffman, IL
62252 Huey, IL
62253 Keyesport, IL
62254 Lebanon, IL
62255 Lenzburg, IL
62256 Maeystown, IL
62257 Marissa, IL
62258 Mascoutah, IL
62259 Menard, IL
62260 Millstadt, IL
62261 Modoc, IL
62262 Mulberry Grove, IL
62263 Nashville, IL
62264 New Athens, IL
62265 New Baden, IL
62266 New Memphis, IL
62268 Oakdale, IL
62269 O Fallon, IL
62271 Okawville, IL
62272 Percy, IL
62273 Pierron, IL
62274 Pinckneyville, IL
62275 Pocahontas, IL
62277 Prairie Du Rocher, IL
62278 Red Bud, IL
62279 Renault, IL
62280 Rockwood, IL
62281 Saint Jacob, IL
62282 Saint Libory, IL
62283 Shattuc, IL
62284 Smithboro, IL
62285 Smithton, IL
62286 Sparta, IL
62288 Steeleville, IL
62289 Summerfield, IL
62292 Tilden, IL
62293 Trenton, IL
62294 Troy, IL
62295 Valmeyer, IL
62297 Walsh, IL
62298 Waterloo , IL
63001 Allenton, MO
63005 Chesterfield, MO · Clarkson Valley, MO · Gumbo, MO · Wildwood, MO
63006 * (PO Boxes) Chesterfield, MO
63010 Arnold, MO · Maxville, MO · Ballwin, MO · Ellisville, MO · Manchester, MO · Town and Country, MO · Wildwood, MO · Winchester, MO
63011 Ballwin, MO
63012 Barnhart, MO
63013 Beaufort, MO
63014 Berger, MO · Etlah, MO
63015 Catawissa, MO
63016 Cedar Hill, MO · Lake Adelle, MO
63017 Chesterfield, MO · Clarkson Valley, MO · Town and Country, MO
63019 Crystal City, MO
63020 De Soto, MO · Olympian Village, MO · Valles Mines, MO
63021 Ballwin, MO · Ellisville, MO · Manchester, MO · Sherman, MO · Twin Oaks, MO · Wildwood, MO · Winchester, MO
63022 Ballwin, MO
63023 Dittmer, MO
63024 * (PO Boxes) Ballwin, MO
63025 Crescent, MO · Eureka, MO · Hoene Spring, MO · Times Beach, MO · Wildwood, MO
63026 Fenton, MO · Murphy, MO
63028 Festus, MO
63030 Fletcher, MO
63031 Florissant, MO
63032 * (PO Boxes) Florissant, MO
63033 Black Jack, MO · Florissant, MO
63034 Florissant, MO
63036 French Village, MO
63037 Gerald, MO
63038 Ellisville, MO, Glencoe, MO, Pond, MO, Wildwood, MO
63039 Gray Summit, MO
63040 Grover, MO · Lake Chesterfield, MO · Pond, MO · Wildwood, MO
63041 Grubville, MO
63042 Hazelwood, MO · Robertson, MO · Vigus, MO
63043 Hazelwood, MO · Maryland Heights, MO
63044 Bridgeton, MO · Bridgeton Terrace, MO · Hazelwood, MO
63045 Bridgeton, MO · Earth City, MO · Hazelwood, MO
63047 Hematite, MO
63048 Herculaneum, MO
63049 High Ridge, MO
63050 Hillsboro, MO
63051 House Springs, MO
63052 Antonia, MO · Imperial, MO · Otto, MO · Sulphur Springs, MO
63053 Imperial, MO · Kimmswick, MO
63055 Labadie, MO · Pacific, MO
63056 Leslie, MO
63057 Liguori, MO
63060 Lonedell, MO · Luebbering, MO
63061 Luebbering, MO
63065 Mapaville, MO
63066 Morse Mill, MO
63068 Campbellton, MO · Detmold, MO · Dissen, MO · Lyon, MO · New Haven, MO · Stony Hill, MO
63069 Pacific, MO · Wildwood, MO
63070 Horine, MO · Pevely, MO
63071 Richwoods, MO
63072 Robertsville, MO
63073 Saint Albans, MO
63074 Saint Ann, MO
63077 Saint Clair, MO
63079 * (PO Boxes) Stanton, MO
63080 Japan, MO · Pea Ridge, MO · Spring Bluff, MO · Strain, MO · Sullivan, MO
63084 Moselle, MO · Union, MO
63087 Valles Mines, MO
63088 Manchester, MO · Twin Oaks, MO · Valley Park, MO
63089 Villa Ridge, MO
63090 Campbellton, MO · Clover Bottom, MO · Washington, MO
63091 Rosebud, MO
63099 (Maritz) Fenton, MO
63101 Saint Louis, MO
63102 Saint Louis, MO
63103 Saint Louis, MO
63104 Saint Louis, MO
63105 Clayton, MO · University City, MO
63106 Saint Louis, MO
63107 Saint Louis, MO
63108 Saint Louis, MO
63109 Saint Louis, MO
63110 Saint Louis, MO
63111 Saint Louis, MO
63112 Wellston, MO
63113 Saint Louis, MO
63114 Breckenridge Hills, MO · Charlack, MO · Overland, MO · Saint John, MO · Vinita Park, MO
63115 Saint Louis, MO
63116 Saint Louis, MO
63117 Richmond Heights, MO
63118 Saint Louis, MO
63119 Rock Hill, MO · Shrewsbury, MO · Webster Groves, MO
63120 Goodfellow Terrace, MO · Pine Lawn, MO
63121 Bel Nor, MO · Bel Ridge, MO · Bellerive, MO · Beverly Hills, MO · Normandy, MO · Northwoods, MO · Pasadena Hills, MO · Pasadena Park, MO · Velda Village Hills, MO
63122 Des Peres, MO · Glendale, MO · Kirkwood, MO · Oakland, MO · Warson Woods, MO
63123 Affton, MO
63124 Clayton, MO · Ladue, MO · University City, MO
63125 Bella Villa, MO · Lemay, MO
63126 Crestwood, MO · Sappington, MO
63127 Sunset Hills, MO
63128 Sappington, MO
63129 Mehlville, MO · Oakville, MO
63130 University City, MO
63131 Crystal Lake Park, MO · Des Peres, MO · Frontenac, MO · Huntleigh, MO · Town and Country, MO
63132 Olivette, MO
63133 Greendale, MO · Hanley Hills, MO · Pagedale, MO · Wellston, MO
63134 Berkeley, MO · Edmundson, MO · Woodson Terrace, MO
63135 Burke City, MO · Calverton Park, MO · Dellwood, MO · Ferguson, MO · Hazelwood, MO
63136 Country Club Hills, MO · Dellwood, MO · Ferguson, MO · Flordell Hills, MO · Jennings, MO · Moline Acres, MO
63137 Bellefontaine Neighbors, MO · Glasgow Village, MO · North County, MO · Riverview, MO
63138 North County, MO · Spanish Lake, MO
63139 St. Louis, MO
63140 Berkeley, MO · Kinloch, MO
63141 Creve Coeur, MO
63143 Maplewood, MO
63144 Brentwood, MO
63145 Ferguson, MO · Lambert Airport, MO
63146 West StL County, MO
63147 Saint Louis, MO
63150 Bank of America Saint Louis, MO
63151 * POB Saint Louis, MO
63155 * POB Saint Louis, MO
63156 * POB Saint Louis, MO
63157 * POB Saint Louis, MO
63158 * POB Saint Louis, MO
63160 (Bank of America) Saint Louis, MO
63163 * (PO Boxes) Saint Louis, MO
63164 (Ralson Purina) Saint Louis, MO
63166 * (PO Boxes) Saint Louis, MO
63167 (Monsanto) Saint Louis, MO
63169 * (PO Boxes) Saint Louis, MO
63171 (Laclede Gas) Saint Louis, MO
63177 * (PO Boxes) Saint Louis, MO
63178 * (PO Boxes) Saint Louis, MO
63179 * (PO Boxes) Saint Louis, MO
63180 (Information Service Center) Saint Louis, MO
63182 (Information Service Center) Saint Louis, MO
63188 * (PO Boxes) Saint Louis, MO
63190 (Nordstrom) Saint Louis, MO
63195 (Firstar Bank, Mercantile Bank) Saint Louis, MO
63196 (Ford Motor Credit) Saint Louis, MO
63197 (Courtesy Repy Mail) Saint Louis, MO
63198 (Monsanto) Saint Louis, MO
63199 (USPS Inspection Service) Saint Louis, MO
63301 Black Walnut, MO · Kampville, MO · Kampville Beach, MO · Kampville Court, MO · Orchard Farm, MO, Saint Charles, MO · South Shore, MO
63302 (PO Boxes) Saint Charles, MO
63303 Harvester, MO · Saint Charles, MO · Saint Peters, MO
63304 Saint Charles, MO · Saint Peters, MO · Weldon Spring, MO · Weldon Spring Heights, MO
63330 Annada, MO
63332 Augusta, MO · Femme Osage, MO · Schluersburg, MO
63333 Bellflower, MO · Gamma, MO · Liege, MO
63334 Bowling Green, MO · Cyrene, MO · Saint Clement, MO · Tarrants, MO · Vera, MO
63336 Clarksville, MO · Paynesville, MO
63338 Cottleville, MO
63339 Curryville, MO
63341 Defiance, MO · Matson, MO
63342 Dutzow, MO
63343 Auburn, MO · Elsberry, MO · New Hope, MO
63344 Eolia, MO · Prairieville, MO
63345 Farber, MO
63346 Flinthill, MO
63347 Foley, MO
63348 Cappeln, MO · Foristell, MO
63349 Hawk Point, MO
63350 High Hill, MO
63351 Jonesburg, MO
63352 Laddonia, MO
63353 Louisiana, MO
63357 Lake Sherwood, MO · Marthasville, MO
63359 Middletown, MO · New Hartford, MO
63361 Buell, MO · Danville, MO · Mineola, MO · Montgomery City, MO
63362 Moscow Mills, MO
63363 Big Springs, MO · New Florence, MO · Prices Branch, MO
63365 New Melle, MO
63366 Dardenne Prairie, MO · O Fallon, MO · Saint Paul, MO
63367 Lake Saint Louis, MO · O Fallon, MO
63368 O Fallon, MO
63369 Chain of Rocks, MO · Ethlyn, MO · Maryknoll, MO · Old Monroe, MO
63370 Olney, MO
63373 Machens, MO · Portage des Sioux, MO
63376 Saint Peters, MO
63377 Corso, MO · Millwood, MO · Silex, MO
63378 Treloar, MO
63379 Briscoe, MO · Davis, MO · Old Alexandria, MO · Troy, MO
63381 New Truxton, MO · Truxton, MO
63382 Vandalia, MO
63383 Camp Branch, MO · Elkhorn, MO · Pendleton, MO, Truesdale, MO · Warrenton, MO
63384 Wellsville, MO
63385 Gilmore, MO · Josephville, MO · Wentzville, MO
63386 West Alton, MO
63387 Whiteside, MO
63388 Williamsburg, MO
63389 Winfield, MO
63390 Innsbrook, MO · Wright City, MO
</span>

<?php get_footer();
