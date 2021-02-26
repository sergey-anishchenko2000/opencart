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
      $language_id => '<div class="before-newsletter">
	<div class="heading">Our History</div>
	<div class="text">UNERO was founded by designers Joe Doucet, Dean Di Simone and Evan Clabots. New York-based, they\'ve each led careers on the world stage, creating and innovating across categories. They\'ve now joined forces to launch UNERO, envisioned as a vibrant hub for unique ideas and new possibilities in design.</div>
</div>',
      1 => '<div class="before-newsletter">
	<div class="heading">Our History</div>
	<div class="text">UNERO was founded by designers Joe Doucet, Dean Di Simone and Evan Clabots. New York-based, they\'ve each led careers on the world stage, creating and innovating across categories. They\'ve now joined forces to launch UNERO, envisioned as a vibrant hub for unique ideas and new possibilities in design.</div>
</div>',
      2 => '<div class="before-newsletter">
	<div class="heading">Our History</div>
	<div class="text">UNERO was founded by designers Joe Doucet, Dean Di Simone and Evan Clabots. New York-based, they\'ve each led careers on the world stage, creating and innovating across categories. They\'ve now joined forces to launch UNERO, envisioned as a vibrant hub for unique ideas and new possibilities in design.</div>
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