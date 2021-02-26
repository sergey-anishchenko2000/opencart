<?php if($registry->has('theme_options') == true) { 
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
$cart_info = $theme_options->getCart(); ?>

<!-- Cart block -->
<div id="cart_block">
	<div class="cart-heading">
		<i class="cart-count"><span id="total_count_ajax"><?php echo $cart_info['total_item']; ?></span></i>
		<i class="t-icon icon-bag2"></i>
	</div>
</div>

<div id="off-sticky-cart" class="unero-off-sticky-cart"></div>

<div class="stickycart">
	<div class="overflow-stickycart">
		<a href="#" class="close-cart-block"><span aria-hidden="true" class="icon-cross2"></span></a>
		<div id="cart_content"><div id="cart_content_ajax">
			<?php if ($products || $vouchers) { ?>
			<div class="mini-cart-info">
			  <table>
			    <?php foreach ($products as $product) { ?>
			    <tr>
			      <td class="image"><?php if ($product['thumb']) { ?>
			        <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
			        <?php } ?></td>
			      <td class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
			       		<div>x&nbsp;<?php echo $product['quantity']; ?></div>
			       		<div class="price"><?php echo $product['total']; ?></div>
			       		
			       </td>
			      <td class="remove"><a href="javascript:;" onclick="cart.remove('<?php echo $product['cart_id']; ?>');" title="<?php echo $button_remove; ?>">x</a></td>
			    </tr>
			    <?php } ?>
			    <?php foreach ($vouchers as $voucher) { ?>
			    <tr>
			      <td class="image"></td>
			      <td class="name"><?php echo $voucher['description']; ?></td>
			      <td class="quantity">x&nbsp;1</td>
			      <td class="total"><?php echo $voucher['amount']; ?></td>
			      <td class="remove"><a href="javascript:;" onclick="voucher.remove('<?php echo $voucher['key']; ?>');" title="<?php echo $button_remove; ?>">x</a></td>
			    </tr>
			    <?php } ?>
			  </table>
			</div>
			
			<div class="bottom">
				<div class="mini-cart-total clearfix">
				    <?php foreach ($totals as $total) { ?>
				    <?php $left = $total['title']; $right = $total['text']; ?>
				    <?php } ?>
				    <div class="left"><?php echo $left; ?></div>
				    <div class="right"><?php echo $right; ?></div>
				</div>
				
				<div class="checkout"><a href="<?php echo $cart; ?>" class="firstbutton"><?php echo $text_cart; ?></a><a href="<?php echo $checkout; ?>" class="secondbutton"><?php echo $text_checkout; ?></a></div>
			</div>
			<?php } else { ?>
			<div class="empty"><?php echo $text_empty; ?></div>
			<?php } ?>
		</div></div>
	</div>
</div>
<?php } ?>