<?php echo $header; 
if(isset($mfilter_json)) {
	if(!empty($mfilter_json)) { 
		echo '<div id="mfilter-json" style="display:none">' . base64_encode( $mfilter_json ) . '</div>'; 
	} 
}

$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); 
include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/wrapper_top.tpl'); ?>

<div id="mfilter-content-container">
  <?php if ($products) { ?>
  <!-- Filter -->
  <div class="product-filter clearfix">
  	<div class="options">  		
  		<div class="button-group display" data-toggle="buttons-radio">
  			<button id="grid" <?php if($theme_options->get('default_list_grid') == '1') { echo 'class="active"'; } ?> rel="tooltip" title="Grid" onclick="display('grid');"><i class="icon-icons2"></i></button>
  			<button id="list" <?php if($theme_options->get('default_list_grid') != '1') { echo 'class="active"'; } ?> rel="tooltip" title="List" onclick="display('list');"><i class="icon-menu2"></i></button>
  		</div>
  	</div>
  	
  	<div class="list-options">
  		<div class="sort">
  			<?php echo $text_sort; ?>
  			<div class="overflow-select">
  	  			<select onchange="location = this.value;">
  	  			  <?php foreach ($sorts as $sorts) { ?>
  	  			  <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
  	  			  <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
  	  			  <?php } else { ?>
  	  			  <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
  	  			  <?php } ?>
  	  			  <?php } ?>
  	  			</select>
  			</div>
  		</div>
  		
  		<div class="limit">
  			<?php echo $text_limit; ?>
  			<div class="overflow-select">
  	  			<select onchange="location = this.value;">
  	  			  <?php foreach ($limits as $limits) { ?>
  	  			  <?php if ($limits['value'] == $limit) { ?>
  	  			  <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
  	  			  <?php } else { ?>
  	  			  <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
  	  			  <?php } ?>
  	  			  <?php } ?>
  	  			</select>
  			</div>
  		</div>
  	</div>
  </div>
  
  <!-- Products list -->
  <div class="product-list"<?php if(!($theme_options->get('default_list_grid') == '1')) { echo ' class="active"'; } ?>>
  	<?php foreach ($products as $product) { ?>
  	<!-- Product -->
  	<div>
  		<div class="row">
  			<div class="col-sm-5">
  	  			<div class="image <?php if($theme_options->get( 'product_image_effect' ) == '1') { echo 'image-swap-effect'; } ?>">
  	  				<?php if($product['special'] && $theme_options->get( 'display_text_sale' ) != '0') { ?>
  	  					<?php $text_sale = 'Sale';
  	  					if($theme_options->get( 'sale_text', $config->get( 'config_language_id' ) ) != '') {
  	  						$text_sale = $theme_options->get( 'sale_text', $config->get( 'config_language_id' ) );
  	  					} ?>
  	  					<?php if($theme_options->get( 'type_sale' ) == '1') { ?>
  	  					<?php $product_detail = $theme_options->getDataProduct( $product['product_id'] );
  	  					$roznica_ceny = $product_detail['price']-$product_detail['special'];
  	  					$procent = ($roznica_ceny*100)/$product_detail['price']; ?>
  	  					<div class="sale">-<?php echo round($procent); ?>%</div>
  	  					<?php } else { ?>
  	  					<div class="sale"><?php echo $text_sale; ?></div>
  	  					<?php } ?>
  	  				<?php } ?>
  	  				
  	  				<div class="buttons">
  	  					<?php if($theme_options->get( 'quick_view' ) == 1) { ?>
  	  					<div class="quickview">
  	  						<a href="index.php?route=product/quickview&product_id=<?php echo $product['product_id']; ?>" data-original-title="<?php if($theme_options->get( 'quickview_text', $config->get( 'config_language_id' ) ) != '') { echo html_entity_decode($theme_options->get( 'quickview_text', $config->get( 'config_language_id' ) )); } else { echo 'Quick View'; } ?>" data-toggle="tooltip"><i class="p-icon icon-plus"></i></a>
  	  					</div>
  	  					<?php } ?>
  	  				</div>
  	  				
  	  				<?php if($product['thumb']) { ?>
  	  					<a href="<?php echo $product['href']; ?>">
  	  						<?php if($theme_options->get( 'product_image_effect' ) == '1') {
  	  							$nthumb = str_replace(' ', "%20", ($product['thumb']));
  	  							$nthumb = str_replace(HTTP_SERVER, "", $nthumb);
  	  							if(file_exists($nthumb)) {
  	  								$image_size = getimagesize($nthumb);
  	  							} else {
  	  								$image_size[0] = 740;
  	  								$image_size[1] = 740;
  	  							}
  	  							$image_swap = $theme_options->productImageSwap($product['product_id'], $image_size[0], $image_size[1]);
  	  							if($image_swap != '') echo '<img src="' . $image_swap . '" alt="' . $product['name'] . '" class="swap-image" />';
  	  						} ?> 
  	  						<?php if($theme_options->get( 'lazy_loading_images' ) != '0') { ?>
  	  						<img src="image/catalog/blank.gif" data-echo="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" class="<?php if($theme_options->get( 'product_image_effect' ) == '2') { echo 'zoom-image-effect'; } ?>" />
  	  						<?php } else { ?>
  	  						<img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" class="<?php if($theme_options->get( 'product_image_effect' ) == '2') { echo 'zoom-image-effect'; } ?>" />
  	  						<?php } ?>
  	  					</a>
  	  				<?php } else { ?>
  	  					<a href="<?php echo $product['href']; ?>"><img src="image/no_image.jpg" alt="<?php echo $product['name']; ?>" /></a>
  	  				<?php } ?>
  	  			</div>
  			</div>
  			
  			<div class="name-desc col-sm-7">
  				<div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
  				
  				<?php if ($product['rating']) { ?>
  				<div class="rating-reviews clearfix">
  					<div class="rating"><i class="fa fa-star<?php if($product['rating'] >= 1) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 2) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 3) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 4) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 5) { echo ' active'; } ?>"></i></div>
  				</div>
  				<?php } ?>
  				
  				<div class="price">
  					<?php if (!$product['special']) { ?>
  					<?php echo $product['price']; ?>
  					<?php } else { ?>
  					<span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
  					<?php } ?>
  				</div>
  					
  				<div class="description"><?php echo $product['description']; ?></div>
  				
  				<div class="bottom clearfix">
  					<div class="add-to-cart">
  					     <?php $enquiry = false; if($config->get( 'product_blocks_module' ) != '') { $enquiry = $theme_options->productIsEnquiry($product['product_id']); }
  					     if(is_array($enquiry)) { ?>
  					     <a href="javascript:openPopup('<?php echo $enquiry['popup_module']; ?>', '<?php echo $product['product_id']; ?>')" class="button button-enquiry">
  					          <?php if($enquiry['icon'] != '' && $enquiry['icon_position'] == 'left') { echo '<img src="image/' . $enquiry['icon']. '" align="left" class="icon-enquiry" alt="Icon">'; } ?>
  					          <span class="text-enquiry"><?php echo $enquiry['block_name']; ?></span>
  					          <?php if($enquiry['icon'] != '' && $enquiry['icon_position'] == 'right') { echo '<img src="image/' . $enquiry['icon']. '" align="right" class="icon-enquiry" alt="Icon">'; } ?>
  					     </a>
  					     <?php } else { ?>
  					     <a onclick="cart.add('<?php echo $product['product_id']; ?>');" class="button"><?php echo $button_cart; ?></a>
  					     <?php } ?>
  					</div>
  	  					
  	  				<div class="buttons2">
  	  					<?php if($theme_options->get( 'display_add_to_wishlist' ) != '0') { ?>
  	  					<a onclick="wishlist.add('<?php echo $product['product_id']; ?>');" class="add-to-wishlist" data-toggle="tooltip" data-original-title="<?php if($theme_options->get( 'add_to_wishlist_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'add_to_wishlist_text', $config->get( 'config_language_id' ) ); } else { echo 'Add to wishlist'; } ?>"><span></span></a>
  	  					<?php } ?>
  	  					
  	  					<?php if($theme_options->get( 'display_add_to_compare' ) != '0') { ?>
  	  					<a onclick="compare.add('<?php echo $product['product_id']; ?>');" class="add-to-compare" data-toggle="tooltip" data-original-title="<?php if($theme_options->get( 'add_to_compare_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'add_to_compare_text', $config->get( 'config_language_id' ) ); } else { echo 'Add to compare'; } ?>"><span></span></a>
  	  					<?php } ?>
  	  				</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<?php } ?>
  </div>
  
  <!-- Products grid -->
  <?php 
  $class = 3; 
  $row = 4; 
  
  if($theme_options->get( 'product_per_pow' ) == 6) { $class = 2; }
  if($theme_options->get( 'product_per_pow' ) == 5) { $class = 25; }
  if($theme_options->get( 'product_per_pow' ) == 3) { $class = 4; }
  if($theme_options->get( 'product_per_pow' ) == 2) { $class = 6; }
  
  if($theme_options->get( 'product_per_pow' ) > 1) { $row = $theme_options->get( 'product_per_pow' ); } 
  ?>
  <div class="product-grid"<?php if($theme_options->get('default_list_grid') == '1') { echo ' class="active"'; } ?>>
  	<div class="row">
	  	<?php $row_fluid = 0; foreach ($products as $product) { $row_fluid++; ?>
		  	<?php $r=$row_fluid-floor($row_fluid/$row)*$row; if($row_fluid>$row && $r == 1) { echo '</div><div class="row">'; } ?>
		  	<div class="col-sm-<?php echo $class; ?> col-xs-6">
		  	    <?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?>
		  	</div>
	    <?php } ?>
    </div>
  </div>
  <div class="row pagination-results">
    <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
    <div class="col-sm-6 text-right"><?php echo $results; ?></div>
  </div>
  <?php } else { ?>
  <p><?php echo $text_empty; ?></p>
  <div class="buttons">
    <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
  </div>
  <?php } ?>
<script type="text/javascript"><!--
function display(view) {

	if (view == 'list') {
		$('.product-grid').removeClass("active");
		$('.product-list').addClass("active");

		$('.display').html('<button id="grid" rel="tooltip" title="Grid" onclick="display(\'grid\');"><i class="icon-icons2"></i></button> <button class="active" id="list" rel="tooltip" title="List" onclick="display(\'list\');"><i class="icon-menu2"></i></button>');
		
		localStorage.setItem('display', 'list');
	} else {
	
		$('.product-grid').addClass("active");
		$('.product-list').removeClass("active");
					
		$('.display').html('<button class="active" id="grid" rel="tooltip" title="Grid" onclick="display(\'grid\');"><i class="icon-icons2"></i></button> <button id="list" rel="tooltip" title="List" onclick="display(\'list\');"><i class="icon-menu2"></i></button>');
		
		localStorage.setItem('display', 'grid');
	}
}

if (localStorage.getItem('display') == 'list') {
	display('list');
} else if (localStorage.getItem('display') == 'grid') {
	display('grid');
} else {
	display('<?php if($theme_options->get('default_list_grid') == '1') { echo 'grid'; } else { echo 'list'; } ?>');
}
//--></script> 

</div>
<?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/wrapper_bottom.tpl'); ?>
<?php echo $footer; ?>