<?php 

$language_id = 3;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1 && $language['language_id'] != 2) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["filter_product_module"] = array (
  1 => 
  array (
    'tabs' => 
    array (
      1 => 
      array (
        'heading' => 
        array (
          $language_id => 'All',
          1 => 'All',
          2 => 'All',
        ),
        'title' => 'latest',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      2 => 
      array (
        'heading' => 
        array (
          $language_id => 'Accessories',
          1 => 'Accessories',
          2 => 'Accessories',
        ),
        'title' => 'most_viewed',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      3 => 
      array (
        'heading' => 
        array (
          $language_id => 'Bags',
          1 => 'Bags',
          2 => 'Bags',
        ),
        'title' => 'random',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      4 => 
      array (
        'heading' => 
        array (
          $language_id => 'Decoration',
          1 => 'Decoration',
          2 => 'Decoration',
        ),
        'title' => 'random',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      5 => 
      array (
        'heading' => 
        array (
          $language_id => 'Furnitures',
          1 => 'Furnitures',
          2 => 'Furnitures',
        ),
        'title' => 'random',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '0',
    'width' => '480',
    'height' => '480',
    'itemsperpage' => '4',
    'cols' => '3',
    'limit' => '12',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '2',
  ),
); 

$this->model_setting_setting->editSetting( "filter_product", $output );	

?>