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
      $language_id => '<div class="grid-backgrounds">
	<div class="backgrounds">
		<div class="background active" style="background-image: url(image/catalog/grid-background/background1.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background2.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background3.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background4.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background5.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background6.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background7.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background8.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background9.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background10.jpg)"></div>
	</div>
	
	<div class="grid-items clearfix">
		<div class="item active">
			<a href="#" class="item-inner">
				<h2 class="title">New Items</h2>
				<span class="desc">New arrival March 2017</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Discount Items</h2>
				<span class="desc">Don\'t miss out</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Furnitures</h2>
				<span class="desc">Chair, sofa, shelve</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Bags</h2>
				<span class="desc">Backpacks, Duffles</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Shoes</h2>
				<span class="desc">Sneakers, leathers, boots</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Decorations</h2>
				<span class="desc">Living room, kitchen</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Sunglasses</h2>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Clocks</h2>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">News</h2>
				<span class="desc">Latest from blogs</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Lookbook</h2>
				<span class="desc">Let\'s discover</span></a>
			</a>
		</div>
	</div>
</div>',
      1 => '<div class="grid-backgrounds">
	<div class="backgrounds">
		<div class="background active" style="background-image: url(image/catalog/grid-background/background1.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background2.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background3.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background4.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background5.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background6.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background7.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background8.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background9.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background10.jpg)"></div>
	</div>
	
	<div class="grid-items clearfix">
		<div class="item active">
			<a href="#" class="item-inner">
				<h2 class="title">New Items</h2>
				<span class="desc">New arrival March 2017</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Discount Items</h2>
				<span class="desc">Don\'t miss out</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Furnitures</h2>
				<span class="desc">Chair, sofa, shelve</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Bags</h2>
				<span class="desc">Backpacks, Duffles</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Shoes</h2>
				<span class="desc">Sneakers, leathers, boots</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Decorations</h2>
				<span class="desc">Living room, kitchen</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Sunglasses</h2>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Clocks</h2>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">News</h2>
				<span class="desc">Latest from blogs</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Lookbook</h2>
				<span class="desc">Let\'s discover</span></a>
			</a>
		</div>
	</div>
</div>',
      2 => '<div class="grid-backgrounds">
	<div class="backgrounds">
		<div class="background active" style="background-image: url(image/catalog/grid-background/background1.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background2.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background3.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background4.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background5.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background6.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background7.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background8.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background9.jpg)"></div>
		<div class="background" style="background-image: url(image/catalog/grid-background/background10.jpg)"></div>
	</div>
	
	<div class="grid-items clearfix">
		<div class="item active">
			<a href="#" class="item-inner">
				<h2 class="title">New Items</h2>
				<span class="desc">New arrival March 2017</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Discount Items</h2>
				<span class="desc">Don\'t miss out</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Furnitures</h2>
				<span class="desc">Chair, sofa, shelve</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Bags</h2>
				<span class="desc">Backpacks, Duffles</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Shoes</h2>
				<span class="desc">Sneakers, leathers, boots</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Decorations</h2>
				<span class="desc">Living room, kitchen</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Sunglasses</h2>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Clocks</h2>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">News</h2>
				<span class="desc">Latest from blogs</span></a>
			</a>
		</div>
		
		<div class="item">
			<a href="#" class="item-inner">
				<h2 class="title">Lookbook</h2>
				<span class="desc">Let\'s discover</span></a>
			</a>
		</div>
	</div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>