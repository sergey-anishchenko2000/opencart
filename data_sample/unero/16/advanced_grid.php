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
    'custom_class' => 'footer-1',
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
      1 => 
      array (
        'status' => '1',
        'width' => '4',
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
              $language_id => '<div class="logo"><img src="image/catalog/logo_unero.png" title="Your Store" alt="Your Store"></div>',
              1 => '<div class="logo"><img src="image/catalog/logo_unero.png" title="Your Store" alt="Your Store"></div>',
              2 => '<div class="logo"><img src="image/catalog/logo_unero.png" title="Your Store" alt="Your Store"></div>',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'status' => '1',
        'width' => '5',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '2',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => 'Newsletter',
                1 => 'Newsletter',
                2 => 'Newsletter',
              ),
              'text' => 
              array (
                $language_id => '',
                1 => '',
                2 => '',
              ),
              'input_placeholder' => 
              array (
                $language_id => 'E-mail Address',
                1 => 'E-mail Address',
                2 => 'E-mail Address',
              ),
              'subscribe_text' => 
              array (
                $language_id => 'Subscribe',
                1 => 'Subscribe',
                2 => 'Subscribe',
              ),
              'unsubscribe_text' => 
              array (
                $language_id => '',
                1 => '',
                2 => '',
              ),
            ),
          ),
        ),
      ),
      3 => 
      array (
        'status' => '1',
        'width' => '3',
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
              $language_id => '<div class="socials" id="socials-footer">
  <a target="_blank" href="https://facebook.com/roartheme" class="fa fa-facebook"></a>
  <a target="_blank" href="https://twitter.com/roartheme" class="fa fa-twitter"></a>
  <a target="_blank" href="http://instagram.com/roartheme" class="fa fa-instagram"></a>
</div>',
              1 => '<div class="socials" id="socials-footer">
  <a target="_blank" href="https://facebook.com/roartheme" class="fa fa-facebook"></a>
  <a target="_blank" href="https://twitter.com/roartheme" class="fa fa-twitter"></a>
  <a target="_blank" href="http://instagram.com/roartheme" class="fa fa-instagram"></a>
</div>',
              2 => '<div class="socials" id="socials-footer">
  <a target="_blank" href="https://facebook.com/roartheme" class="fa fa-facebook"></a>
  <a target="_blank" href="https://twitter.com/roartheme" class="fa fa-twitter"></a>
  <a target="_blank" href="http://instagram.com/roartheme" class="fa fa-instagram"></a>
</div>',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'status' => '1',
        'width' => '12',
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
              $language_id => '<div class="footer-copyright">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12 text-left col-footer-copyright">
			<div class="text-copyright">© 2017 <strong style="color: #000">Unero</strong>. All rights reserved</div>
		</div>
		
		<div class="col-md-6 col-sm-6 col-xs-12 text-right">
			<ul id="menu-footer-menu" class="menu">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Term & Conditions</a></li>
				<li><a href="#">Affilliate</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</div>
	</div>
</div>',
              1 => '<div class="footer-copyright">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12 text-left col-footer-copyright">
			<div class="text-copyright">© 2017 <strong style="color: #000">Unero</strong>. All rights reserved</div>
		</div>
		
		<div class="col-md-6 col-sm-6 col-xs-12 text-right">
			<ul id="menu-footer-menu" class="menu">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Term & Conditions</a></li>
				<li><a href="#">Affilliate</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</div>
	</div>
</div>',
              2 => '<div class="footer-copyright">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12 text-left col-footer-copyright">
			<div class="text-copyright">© 2017 <strong style="color: #000">Unero</strong>. All rights reserved</div>
		</div>
		
		<div class="col-md-6 col-sm-6 col-xs-12 text-right">
			<ul id="menu-footer-menu" class="menu">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Term & Conditions</a></li>
				<li><a href="#">Affilliate</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</div>
	</div>
</div>',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => '',
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
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '5',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      5 => 
      array (
        'status' => '1',
        'width' => '12',
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
            'type' => 'products_tabs',
            'products_tabs' => 
            array (
              'module_layout' => 'home_recent_products.tpl',
              'title' => 
              array (
                $language_id => '',
                1 => '',
                2 => '',
              ),
              'description' => 
              array (
                $language_id => '',
                1 => '',
                2 => '',
              ),
              'width' => '700',
              'height' => '700',
              'limit' => '7',
              'products' => 
              array (
                1 => 
                array (
                  'title' => 
                  array (
                    $language_id => 'All',
                    1 => 'All',
                    2 => 'All',
                  ),
                  'get_products_from' => 'latest',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
                2 => 
                array (
                  'title' => 
                  array (
                    $language_id => 'Furnitures',
                    1 => 'Furnitures',
                    2 => 'Furnitures',
                  ),
                  'get_products_from' => 'most_viewed',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
                3 => 
                array (
                  'title' => 
                  array (
                    $language_id => 'Bags',
                    1 => 'Bags',
                    2 => 'Bags',
                  ),
                  'get_products_from' => 'random',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
                4 => 
                array (
                  'title' => 
                  array (
                    $language_id => 'Shoes',
                    1 => 'Shoes',
                    2 => 'Shoes',
                  ),
                  'get_products_from' => 'random',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
                5 => 
                array (
                  'title' => 
                  array (
                    $language_id => 'Decoration',
                    1 => 'Decoration',
                    2 => 'Decoration',
                  ),
                  'get_products_from' => 'random',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>