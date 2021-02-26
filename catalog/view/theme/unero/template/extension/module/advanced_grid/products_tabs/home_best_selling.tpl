<?php 
if($registry->has('theme_options') == true) { 

$class = 3; 
$all = 4;
$id = rand(0, 5000)*rand(5000, 50000);

$theme_options = $registry->get('theme_options');
$config = $registry->get('config');

if($module['content']['limit'] == 6) { $class = 2; $all = 6; }
if($module['content']['limit'] == 5) { $class = 25; $all = 5; }
if($module['content']['limit'] == 3) { $class = 4;  $all = 3; }
if($module['content']['limit'] == 2) { $class = 6; $all = 2; }
if($module['content']['limit'] == 1) { $class = 12; $all = 1; } ?>

<div class="bestselling-products-tabs">
   <ul id="matrialtab<?php echo $id; ?>" class="select-tab">
   	<?php $i = 0; foreach($module['content']['products_tabs'] as $product_tab) {
   		echo '<li'.($i == 0 ? ' class="active"' : '').'><a href="#matrialartstabs-'.$id.'-'.$i.'">'.$product_tab['name'].'</a></li>';
   	$i++; } ?>
   </ul>
   
   <div class="tab-content clearfix">
        <?php $s = 0; foreach($module['content']['products_tabs'] as $product_tab) { ?>
        <div class="tab-pane <?php if($s == 0) { echo 'active'; } ?>" id="matrialartstabs-<?php echo $id.'-'.$s; ?>">
             <div class="home-best-selling-products row">
     			<?php foreach ($product_tab['products'] as $product) {?>
				<div class="col-xs-6 col-sm-4 col-md-4 quickview">	
					<div class="overflow">
						<a href="index.php?route=product/quickview&product_id=<?php echo $product['product_id']; ?>">
							<?php if($product['special'] && $theme_options->get( 'display_text_sale' ) != '0') { ?>
								<?php $text_sale = 'Sale';
								if($theme_options->get( 'sale_text', $config->get( 'config_language_id' ) ) != '') {
									$text_sale = $theme_options->get( 'sale_text', $config->get( 'config_language_id' ) );
								} ?>
								<?php if($theme_options->get( 'type_sale' ) == '1') { ?>
									<?php $product_detail = $theme_options->getDataProduct( $product['product_id'] );
									$roznica_ceny = $product_detail['price']-$product_detail['special'];
									$procent = ($roznica_ceny*100)/$product_detail['price']; ?>
									<span class="sale">-<?php echo round($procent); ?>%</span>
								<?php } else { ?>
									<span class="sale"><?php echo $text_sale; ?></span>
								<?php } ?>
							<?php } ?>
							
							<?php if ($product['thumb']) { ?>
								<span class="image"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" /></span>
							<?php } else { ?>
								<span class="image"><img src="image/no_image.jpg" alt="<?php echo $product['name']; ?>" /></span>
							<?php } ?>
							<span class="hover">
								<span class="name"><?php echo $product['name']; ?></span>
								<span class="price">
									<?php if (!$product['special']) { ?>
										<?php echo $product['price']; ?>
									<?php } else { ?>
										<span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
									<?php } ?>
								</span>
							</span>
						</a>
					</div>
				</div>
     			<?php } ?>
             </div>
        </div>
        <?php $s++; } ?>
   </div>
</div>

<script type="text/javascript">
$('#matrialtab<?php echo $id; ?> a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})

// Changing the defaults
window.sr = ScrollReveal({ reset: true });

// Customizing a reveal set
sr.reveal('.home-best-selling-products > div > div', { duration: 500, opacity: 1 });
</script>
<?php } ?>