<?php 

$language_id = 3;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1 && $language['language_id'] != 2) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["advanced_grid_module"] = array (
  1 => 
  array (
    'custom_class' => 'footer-4',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '99999',
    'position' => 'footer',
    'status' => '1',
    'sort_order' => '',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      2 => 
      array (
        'status' => '1',
        'width' => '2',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="footer-logo"><img src="image/catalog/logo_unero_4.png" alt=""></div>',
              1 => '<div class="footer-logo"><img src="image/catalog/logo_unero_4.png" alt=""></div>',
              2 => '<div class="footer-logo"><img src="image/catalog/logo_unero_4.png" alt=""></div>',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'status' => '1',
        'width' => '5',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '3',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="copyright">© Unero 2017. All Rights Reseverd</div>',
              1 => '<div class="copyright">© Unero 2017. All Rights Reseverd</div>',
              2 => '<div class="copyright">© Unero 2017. All Rights Reseverd</div>',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'status' => '1',
        'width' => '5',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '4',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="socials2">
<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
</div>',
              1 => '<div class="socials2">
<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
</div>',
              2 => '<div class="socials2">
<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
</div>',
            ),
          ),
        ),
      ),
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>