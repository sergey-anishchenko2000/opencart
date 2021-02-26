<?php 

$language_id = 3;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1 && $language['language_id'] != 2) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["blog_latest_module"] = array (
  1 => 
  array (
    'heading_title' => 
    array (
      $language_id => 'From Our Blog',
      1 => 'From Our Blog',
      2 => 'From Our Blog',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'template' => 'unero_home_boxed.tpl',
    'status' => '1',
    'thumb_width' => '370',
    'thumb_height' => '370',
    'articles_limit' => '3',
    'sort_order' => '1',
  ),
); 

$this->model_setting_setting->editSetting( "blog_latest", $output );	

?>