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
             <div class="home-recent-products-products row">
             	<div class="col-xs-6 bleft">
             		<div class="product-grid">
             			<?php $i = 0; foreach ($product_tab['products'] as $product) { $i++; ?>
             				<?php if($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 9 || $i == 11 || $i == 13 || $i == 15) { ?>
             				<?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?>
             			<?php } ?>
             			<?php } ?>
             		</div>
             	</div>
             	
             	<div class="col-xs-6 bright">	
             		<div class="product-grid">
		     			<?php $i = 0; foreach ($product_tab['products'] as $product) { $i++; ?>
		     				<?php if($i == 2 || $i == 4 || $i == 6 || $i == 8 || $i == 10 || $i == 12 || $i == 14 || $i == 16) { ?>
								<?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?>
							<?php } ?>
		     			<?php } ?>
	     			</div>
     			</div>
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
sr.reveal('.home-recent-products-products > div > div > div', { duration: 500, opacity: 1 });
</script>
<?php } ?>