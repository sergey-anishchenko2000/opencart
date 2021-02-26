<div class="search-form-1">
	<div class="search-content">
		<?php
		$search_cats = $theme_options->getAllCategories();
		$category_id = $theme_options->getCurrentCategory();
		?>
		<div class="heading"><?php echo $theme_options->get( 'search_text', $config->get( 'config_language_id' ) ) != '' ? $theme_options->get( 'search_text', $config->get( 'config_language_id' ) ) : 'Search';  ?></div>
				
		<div class="product-cats">
			<label><input type="radio" name="category_id" value="0" checked="checked"><span><?php $theme_options->get( 'all_categories_text', $config->get( 'config_language_id' ) ) ?></span></label>
			<?php $i = 0; foreach ($search_cats as $category_1) { $i++; if($i < 5) { ?>
				<label><input type="radio" name="category_id" value="<?php echo $category_1['category_id']; ?>"><span><?php echo $category_1['name']; ?></span></label>
			<?php } } ?>
		</div>
		
		<div class="search-input">
			<input type="text" class="input-block-level search-query" name="search" placeholder="<?php echo $search; ?>" id="search_query2" value="" />
			<div class="button-search3"></div>
			
			<?php if($theme_options->get( 'quick_search_autosuggest' ) != '0') { ?>
				<div id="autocomplete-results" class="autocomplete-results"></div>
				
				<script type="text/javascript">
				$(document).ready(function() {
			        
					$('#search_query2').autocomplete({
						delay: 0,
						appendTo: "#autocomplete-results",
						source: function(request, response) {	
			        
			                var category_filter = $('.search-form-1 input[name=\'category_id\']:checked').val();
			                var category_filter_url = '';
			                if (category_filter) {
			                    category_filter_url = '&filter_category_id=' + encodeURIComponent(category_filter);
			                }
							$.ajax({
								url: 'index.php?route=search/autocomplete&filter_name=' +  encodeURIComponent(request.term) + category_filter_url,
								dataType: 'json',
								success: function(json) {
									response($.map(json, function(item) {
										return {
											label: item.name,
											value: item.product_id,
											href: item.href,
											thumb: item.thumb,
											desc: item.desc,
											price: item.price
										}
									}));
								}
							});
						},
						select: function(event, ui) {
							document.location.href = ui.item.href;
							
							return false;
						},
						focus: function(event, ui) {
					      	return false;
					   	},
					   	minLength: 2
					})
					.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
					  return $( "<li>" )
					    .append( "<a><img src='" + item.thumb + "' alt=''>" + item.label + "<br><span class='description'>" + item.desc + "</span><br><span class='price'>" + item.price + "</span></a>" )
					    .appendTo( ul );
					};
				});
				</script>
			<?php } ?>
		</div>
	</div>
	
	<div class="close-search"><a href="#"><?php echo $theme_options->get( 'search_close_text', $config->get( 'config_language_id' ) ) != '' ? $theme_options->get( 'search_close_text', $config->get( 'config_language_id' ) ) : 'Close';  ?></a></div>
</div>

<div class="canvas-setting">
	<a href="#" class="close-canvas-setting"><span aria-hidden="true" class="icon-cross2"></span></a>
	
	<div class="language-currency clearfix">
		<?php echo $language.$currency; ?>
	</div>
	
	<?php 
	$top_block = $modules->getModules('top_block');
	if( count($top_block) ) {
		foreach ($top_block as $module) {
			echo $module;
		}
	} ?>
</div>

<div id="off-canvas-layer" class="unero-off-canvas-layer"></div>

<!-- HEADER
	================================================== -->
<header class="header-type-1">
	<div class="background-header"></div>
	<div class="slider-header">		
		<!-- Top of pages -->
		<div id="top" class="<?php if($theme_options->get( 'header_layout' ) == 1) { echo 'full-width'; } else { echo 'fixed'; } ?>">
			<div class="background-top"></div>
			<div class="background">
				<div class="shadow"></div>
				<div class="pattern">
					<div class="container">	
						<div style="position: relative">
							<div class="row">
								<div class="hidden-lg col-md-3 col-sm-3 col-xs-3">
									<a href="#" class="icon-left-menu"><span class="t-icon icon-menu"></span></a>
									
									<div id="close-mobile-menu" class="close-mobile-menu"></div>
									
									<div id="mobile-menu" class="mobile-menu">
										<div class="overflow-mobile-menu mobilemegamenu">
											<a href="#" class="close-mobile"><span aria-hidden="true" class="icon-cross2"></span></a>
											
											<!-- Search -->
											<div class="search_form">
												<div class="button-search"><i class="t-icon icon-magnifier"></i></div>
												<input type="text" class="input-block-level search-query" name="search" placeholder="<?php echo $search; ?>" id="search_query" value="" />
											</div>
											
											<?php 
											$menu = $modules->getModules('menu');
											if( count($menu) ) {
												foreach ($menu as $module) {
													echo $module;
												}
											} elseif($categories) {
											?>
											<div class="container-megamenu container horizontal">
												<div class="megaMenuToggle">
													<div class="megamenuToogle-wrapper">
														<div class="megamenuToogle-pattern">
															<div class="container">
																<div><span></span><span></span><span></span></div>
																Navigation
															</div>
														</div>
													</div>
												</div>
												
												<div class="megamenu-wrapper">
													<div class="megamenu-pattern">
														<div class="container">
															<ul class="megamenu shift-up">
																<?php foreach ($categories as $category) { ?>
																<?php if ($category['children']) { ?>
																<li class="with-sub-menu hover"><p class="close-menu"></p><p class="open-menu"></p>
																	<a href="<?php echo $category['href'];?>"><span><strong><?php echo $category['name']; ?></strong></span></a>
																<?php } else { ?>
																<li>
																	<a href="<?php echo $category['href']; ?>"><span><strong><?php echo $category['name']; ?></strong></span></a>
																<?php } ?>
																	<?php if ($category['children']) { ?>
																	<?php 
																		$width = '100%';
																		$row_fluid = 3;
																		if($category['column'] == 1) { $width = '220px'; $row_fluid = 12; }
																		if($category['column'] == 2) { $width = '500px'; $row_fluid = 6; }
																		if($category['column'] == 3) { $width = '700px'; $row_fluid = 4; }
																	?>
																	<div class="sub-menu" style="width: <?php echo $width; ?>">
																		<div class="content">
																			<p class="arrow"></p>
																			<div class="row hover-menu">
																				<?php for ($i = 0; $i < count($category['children']);) { ?>
																				<div class="col-sm-<?php echo $row_fluid; ?> mobile-enabled">
																					<div class="menu">
																						<ul>
																						  <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
																						  <?php for (; $i < $j; $i++) { ?>
																						  <?php if (isset($category['children'][$i])) { ?>
																						  <li><a href="<?php echo $category['children'][$i]['href']; ?>" onclick="window.location = '<?php echo $category['children'][$i]['href']; ?>';"><?php echo $category['children'][$i]['name']; ?></a></li>
																						  <?php } ?>
																						  <?php } ?>
																						</ul>
																					</div>
																				</div>
																				<?php } ?>
																			</div>
																		</div>
																	</div>
																	<?php } ?>
																</li>
																<?php } ?>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<?php
											}
											?>
											
											<div class="my-account2"><a href="<?php echo $account; ?>"><?php echo $text_account; ?><i class="t-icon icon-user"></i></a></div>
											
											<div class="changer"><?php echo $language.$currency; ?></div>
										</div>
									</div>
								</div>
								
								<!-- Header Left -->
								<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6" id="header-left">
									<?php if ($logo) { ?>
									<!-- Logo -->
									<div class="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a></div>
									<?php } ?>
								</div>
								
								<div class="col-lg-7 hidden-md hidden-sm hidden-xs">
									<?php 
									$menu = $modules->getModules('menu');
									if( count($menu) ) {
										foreach ($menu as $module) {
											echo $module;
										}
									}
									?>
								</div>
								
								<!-- Header Right -->
								<div class="col-md-3 col-sm-3 col-xs-3" id="header-right">
									<a href="#" id="menu-extra-search" class="search-icon"><i class="t-icon icon-magnifier"></i></a>
									
									<a href="<?php echo $account; ?>" class="my-account"><i class="t-icon icon-user"></i></a>
									
									<?php echo $cart; ?>
									
									<a class="menu-sidebar" id="icon-menu-sidebar" href="#"><i class="t-icon icon-menu"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="distributors">
				<a href="index.php?route=information/distributors">
				<img src="image/catalog/cart.png" />
				<span>MAIN DISTRIBUTORS FINDER</span></a>
			</div>
		</div>
	</div>
	
	<?php $slideshow = $modules->getModules('slideshow'); ?>
	<?php  if(count($slideshow)) { ?>
	<!-- Slider -->
	<div id="slider" class="<?php if($theme_options->get( 'slideshow_layout' ) == 1) { echo 'full-width'; } else { echo 'fixed'; } ?>">
		<div class="background-slider"></div>
		<div class="background">
			<div class="shadow"></div>
			<div class="pattern">
				<?php foreach($slideshow as $module) { ?>
				<?php echo $module; ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>
</header>

<?php  if(!count($slideshow)) { ?>
<div id="un-header-minimized" class="un-header-minimized"></div>
<?php } ?>