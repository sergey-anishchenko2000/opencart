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
      $language_id => '<div class="featured-collections">
	<div class="heading">Featured Collections</div>
	<div class="description">
		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>Excepteur sint occaecat cupidatat non proident.
	</div>
	
	<div class="home-banners clearfix">
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-01.jpg" alt=""></a></div>
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-02.jpg" alt=""></a></div>
	</div>
	
	<div class="home-banners clearfix">
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-03.jpg" alt=""></a></div>
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-04.jpg" alt=""></a></div>
	</div>
</div>',
      1 => '<div class="featured-collections">
	<div class="heading">Featured Collections</div>
	<div class="description">
		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>Excepteur sint occaecat cupidatat non proident.
	</div>
	
	<div class="home-banners clearfix">
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-01.jpg" alt=""></a></div>
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-02.jpg" alt=""></a></div>
	</div>
	
	<div class="home-banners clearfix">
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-03.jpg" alt=""></a></div>
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-04.jpg" alt=""></a></div>
	</div>
</div>',
      2 => '<div class="featured-collections">
	<div class="heading">Featured Collections</div>
	<div class="description">
		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>Excepteur sint occaecat cupidatat non proident.
	</div>
	
	<div class="home-banners clearfix">
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-01.jpg" alt=""></a></div>
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-02.jpg" alt=""></a></div>
	</div>
	
	<div class="home-banners clearfix">
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-03.jpg" alt=""></a></div>
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-04.jpg" alt=""></a></div>
	</div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '4',
  ),
  3 => 
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
      $language_id => '<div class="before-newsletter">
	<div class="heading">All Order Over $75 Ship Free</div>
	<div class="text">“Designed by LoganCee, Unero is a minimalist design that emphasises speed and efficiency overunnecessary features. The goal was to design something that offers all the features you need without the added bloat that is usually associated with OpenCart designs. “</div>
</div>',
      1 => '<div class="before-newsletter">
	<div class="heading">All Order Over $75 Ship Free</div>
	<div class="text">“Designed by LoganCee, Unero is a minimalist design that emphasises speed and efficiency overunnecessary features. The goal was to design something that offers all the features you need without the added bloat that is usually associated with OpenCart designs. “</div>
</div>',
      2 => '<div class="before-newsletter">
	<div class="heading">All Order Over $75 Ship Free</div>
	<div class="text">“Designed by LoganCee, Unero is a minimalist design that emphasises speed and efficiency overunnecessary features. The goal was to design something that offers all the features you need without the added bloat that is usually associated with OpenCart designs. “</div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '7',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>