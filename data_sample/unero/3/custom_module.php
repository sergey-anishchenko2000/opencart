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
      $language_id => '<div class="top-bar">Free Shipping On The World For All Orders Over $99!</div>',
      1 => '<div class="top-bar">Free Shipping On The World For All Orders Over $99!</div>',
      2 => '<div class="top-bar">Free Shipping On The World For All Orders Over $99!</div>',
    ),
    'layout_id' => '99999',
    'position' => 'top_block',
    'status' => '1',
    'sort_order' => '1',
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
      $language_id => '<div class="boxed-unero-about row">
	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
		<div class="about">
			<div class="title">Unero Fashion &amp; Decor</div>
			<div class="desc">A formally harmonious product needs no decoration; it should be elevated through pure form.</div>
			<div class="link"><a href="#">Learn More</a></div></div>
	</div>
	
	<div class="col-lg-4 visible-lg">
		<img src="image/catalog/boxed/about.png" alt="" style="display: block;margin: 0px auto">
	</div>
</div>',
      1 => '<div class="boxed-unero-about row">
	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
		<div class="about">
			<div class="title">Unero Fashion &amp; Decor</div>
			<div class="desc">A formally harmonious product needs no decoration; it should be elevated through pure form.</div>
			<div class="link"><a href="#">Learn More</a></div></div>
	</div>
	
	<div class="col-lg-4 visible-lg">
		<img src="image/catalog/boxed/about.png" alt="" style="display: block;margin: 0px auto">
	</div>
</div>',
      2 => '<div class="boxed-unero-about row">
	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
		<div class="about">
			<div class="title">Unero Fashion &amp; Decor</div>
			<div class="desc">A formally harmonious product needs no decoration; it should be elevated through pure form.</div>
			<div class="link"><a href="#">Learn More</a></div></div>
	</div>
	
	<div class="col-lg-4 visible-lg">
		<img src="image/catalog/boxed/about.png" alt="" style="display: block;margin: 0px auto">
	</div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '2',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>