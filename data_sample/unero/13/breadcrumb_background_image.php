<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["breadcrumb_background_image_module"] = array (
  1 => 
  array (
    'background_color' => '#f5f5f5',
    'background_image' => 'catalog/breadcrumb.jpg',
    'background_image_position' => 'bottom center',
    'background_image_repeat' => 'no-repeat',
    'layout_id' => '3',
    'position' => 'breadcrumb',
    'status' => '1',
    'sort_order' => '0',
  ),
); 

$this->model_setting_setting->editSetting( "breadcrumb_background_image", $output );	

?>