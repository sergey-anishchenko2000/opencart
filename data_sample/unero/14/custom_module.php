<?php 

$language_id = 3;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1 && $language['language_id'] != 2) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["custom_module_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
      2 => '',
    ),
    'block_content' => 
    array (
      $language_id => '',
      1 => '',
      2 => '',
    ),
    'html' => 
    array (
      $language_id => '<div class="header-contact-us">
	<div class="heading">Contact Us</div>
	<div class="text">
		69 Halsey St, Ny 10002, New York, United States<br>
		support.center@unero.co<br>
		(0091) 8547 632521
	</div>
</div>',
      1 => '<div class="header-contact-us">
	<div class="heading">Contact Us</div>
	<div class="text">
		69 Halsey St, Ny 10002, New York, United States<br>
		support.center@unero.co<br>
		(0091) 8547 632521
	</div>
</div>',
      2 => '<div class="header-contact-us">
	<div class="heading">Contact Us</div>
	<div class="text">
		69 Halsey St, Ny 10002, New York, United States<br>
		support.center@unero.co<br>
		(0091) 8547 632521
	</div>
</div>',
    ),
    'layout_id' => '99999',
    'position' => 'top_block',
    'status' => '1',
    'sort_order' => '0',
  ),
  2 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
      2 => '',
    ),
    'block_content' => 
    array (
      $language_id => '',
      1 => '',
      2 => '',
    ),
    'html' => 
    array (
      $language_id => '<div class="header-follow-us">
	<div class="heading">Follow Us On Social</div>
	<div class="social-links-list">
		<a target="_blank" href="#" class="share-facebook tooltip-enable social fa fa-facebook"></a>
		<a target="_blank" href="#" class="share-twitter tooltip-enable social fa fa-twitter"></a>
		<a target="_blank" href="#" class="share-googleplus tooltip-enable social fa fa-google-plus"></a>
		<a target="_blank" href="#" class="share-instagram tooltip-enable social fa fa-instagram"></a>
	</div>
</div>',
      1 => '<div class="header-follow-us">
	<div class="heading">Follow Us On Social</div>
	<div class="social-links-list">
		<a target="_blank" href="#" class="share-facebook tooltip-enable social fa fa-facebook"></a>
		<a target="_blank" href="#" class="share-twitter tooltip-enable social fa fa-twitter"></a>
		<a target="_blank" href="#" class="share-googleplus tooltip-enable social fa fa-google-plus"></a>
		<a target="_blank" href="#" class="share-instagram tooltip-enable social fa fa-instagram"></a>
	</div>
</div>',
      2 => '<div class="header-follow-us">
	<div class="heading">Follow Us On Social</div>
	<div class="social-links-list">
		<a target="_blank" href="#" class="share-facebook tooltip-enable social fa fa-facebook"></a>
		<a target="_blank" href="#" class="share-twitter tooltip-enable social fa fa-twitter"></a>
		<a target="_blank" href="#" class="share-googleplus tooltip-enable social fa fa-google-plus"></a>
		<a target="_blank" href="#" class="share-instagram tooltip-enable social fa fa-instagram"></a>
	</div>
</div>',
    ),
    'layout_id' => '99999',
    'position' => 'top_block',
    'status' => '1',
    'sort_order' => '2',
  ),
  3 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => 'Example',
      1 => 'Example',
      2 => 'Example',
    ),
    'block_content' => 
    array (
      $language_id => '<p>sdfasdfsaf dsf sadfs</p>',
      1 => '<p>sdfasdfsaf dsf sadfs<br></p>',
      2 => '<p>sdfasdfsaf dsf sadfs<br></p>',
    ),
    'html' => 
    array (
      $language_id => '<div class="box">
<div class="box-heading">Popular tags</div>
<div class="box-content">
<div class="tags-list">
<a href="#">Bag</a>, <a href="#">Backpack</a>, <a href="#">Chair</a>, <a href="#">Clock</a>, <a href="#">Interior</a>, <a href="#">Indoor</a>, <a href="#">Gift</a>, <a href="#">Accessories</a>, <a href="#">Fashion</a>, <a href="#">Simple</a>
</div>
</div>
</div>',
      1 => '<div class="box">
<div class="box-heading">Popular tags</div>
<div class="box-content">
<div class="tags-list">
<a href="#">Bag</a>, <a href="#">Backpack</a>, <a href="#">Chair</a>, <a href="#">Clock</a>, <a href="#">Interior</a>, <a href="#">Indoor</a>, <a href="#">Gift</a>, <a href="#">Accessories</a>, <a href="#">Fashion</a>, <a href="#">Simple</a>
</div>
</div>
</div>',
      2 => '<div class="box">
<div class="box-heading">Popular tags</div>
<div class="box-content">
<div class="tags-list">
<a href="#">Bag</a>, <a href="#">Backpack</a>, <a href="#">Chair</a>, <a href="#">Clock</a>, <a href="#">Interior</a>, <a href="#">Indoor</a>, <a href="#">Gift</a>, <a href="#">Accessories</a>, <a href="#">Fashion</a>, <a href="#">Simple</a>
</div>
</div>
</div>',
    ),
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '4',
  ),
  4 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      $language_id => '',
      1 => '',
      2 => '',
    ),
    'block_content' => 
    array (
      $language_id => '',
      1 => '',
      2 => '',
    ),
    'html' => 
    array (
      $language_id => '<div class="landing-product">
	<div class="image"><img src="image/catalog/landing/product.jpg" alt=""></div>
	<div class="title">Wood vase decorate</div>
	<div class="description">La croix blog sriracha, distillery ugh small batch retro literally coloring book disrupt iceland migas austin gochujang affogato. Edison bulb butcher.</div>
	<div class="price">$252.00</div>
	<div class="add-to-cart"><a href="index.php?route=product/product&path=20&product_id=28">Add to cart</a></div>
</div>',
      1 => '<div class="landing-product">
	<div class="image"><img src="image/catalog/landing/product.jpg" alt=""></div>
	<div class="title">Wood vase decorate</div>
	<div class="description">La croix blog sriracha, distillery ugh small batch retro literally coloring book disrupt iceland migas austin gochujang affogato. Edison bulb butcher.</div>
	<div class="price">$252.00</div>
	<div class="add-to-cart"><a href="index.php?route=product/product&path=20&product_id=28">Add to cart</a></div>
</div>',
      2 => '<div class="landing-product">
	<div class="image"><img src="image/catalog/landing/product.jpg" alt=""></div>
	<div class="title">Wood vase decorate</div>
	<div class="description">La croix blog sriracha, distillery ugh small batch retro literally coloring book disrupt iceland migas austin gochujang affogato. Edison bulb butcher.</div>
	<div class="price">$252.00</div>
	<div class="add-to-cart"><a href="index.php?route=product/product&path=20&product_id=28">Add to cart</a></div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '15',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>