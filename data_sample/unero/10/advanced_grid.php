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
    'custom_class' => 'footer-3',
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
        'width' => '5',
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
              $language_id => '<ul class="left-links">
<li><a href="#">Term & Condition</a></li>
<li><a href="#">Policy</a></li>
<li><a href="#">Map</a></li>
</ul>',
              1 => '<ul class="left-links">
<li><a href="#">Term & Condition</a></li>
<li><a href="#">Policy</a></li>
<li><a href="#">Map</a></li>
</ul>',
              2 => '<ul class="left-links">
<li><a href="#">Term & Condition</a></li>
<li><a href="#">Policy</a></li>
<li><a href="#">Map</a></li>
</ul>',
            ),
          ),
        ),
      ),
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
              $language_id => '<div class="footer-logo"><img src="image/catalog/logo_unero_3.png" alt=""></div>',
              1 => '<div class="footer-logo"><img src="image/catalog/logo_unero_3.png" alt=""></div>',
              2 => '<div class="footer-logo"><img src="image/catalog/logo_unero_3.png" alt=""></div>',
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
              $language_id => '<div class="socials2">
<label>Follow Us On Social</label>
<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
</div>',
              1 => '<div class="socials2">
<label>Follow Us On Social</label>
<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
</div>',
              2 => '<div class="socials2">
<label>Follow Us On Social</label>
<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
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
              $language_id => '<div class="copyright">© 2017 <span>Unero</span>. All Rights Resevered</div>',
              1 => '<div class="copyright">© 2017 <span>Unero</span>. All Rights Resevered</div>',
              2 => '<div class="copyright">© 2017 <span>Unero</span>. All Rights Resevered</div>',
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
    'sort_order' => '8',
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
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'home_classic.tpl',
              'title' => 
              array (
                $language_id => 'Subscribe to our newsletter',
                1 => 'Subscribe to our newsletter',
                2 => 'Subscribe to our newsletter',
              ),
              'text' => 
              array (
                $language_id => '',
                1 => '',
                2 => '',
              ),
              'input_placeholder' => 
              array (
                $language_id => 'Email Address',
                1 => 'Email Address',
                2 => 'Email Address',
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
    ),
  ),
  3 => 
  array (
    'custom_class' => 'no-paddings-left-right',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '0',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      6 => 
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
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="home-metro-banners">
	<div class="row">
		<div class="col-sm-8">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-01.jpg" alt="">
					<span>
						<strong>Wood Flower Bottles</strong>
						Decorations
					</span>
				</a>
			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-02.jpg" alt="">
					<span>
						<strong>Backpack ERA</strong>
						Bags
					</span>
				</a>
			</div>
			
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-03.jpg" alt="">
					<span>
						<strong>Leather Sneakers</strong>
						Shoes
					</span>
				</a>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-04.jpg" alt="">
					<span>
						<strong>Long Shelve</strong>
						Furniture
					</span>
				</a>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-05.jpg" alt="">
					<span>
						<strong>Wood Glasses</strong>
						Accessories
					</span>
				</a>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-06.jpg" alt="">
					<span>
						<strong>Wood Ottoman</strong>
						Furnitures
					</span>
				</a>
			</div>
		</div>
	</div>
</div>',
              1 => '<div class="home-metro-banners">
	<div class="row">
		<div class="col-sm-8">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-01.jpg" alt="">
					<span>
						<strong>Wood Flower Bottles</strong>
						Decorations
					</span>
				</a>
			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-02.jpg" alt="">
					<span>
						<strong>Backpack ERA</strong>
						Bags
					</span>
				</a>
			</div>
			
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-03.jpg" alt="">
					<span>
						<strong>Leather Sneakers</strong>
						Shoes
					</span>
				</a>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-04.jpg" alt="">
					<span>
						<strong>Long Shelve</strong>
						Furniture
					</span>
				</a>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-05.jpg" alt="">
					<span>
						<strong>Wood Glasses</strong>
						Accessories
					</span>
				</a>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-06.jpg" alt="">
					<span>
						<strong>Wood Ottoman</strong>
						Furnitures
					</span>
				</a>
			</div>
		</div>
	</div>
</div>',
              2 => '<div class="home-metro-banners">
	<div class="row">
		<div class="col-sm-8">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-01.jpg" alt="">
					<span>
						<strong>Wood Flower Bottles</strong>
						Decorations
					</span>
				</a>
			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-02.jpg" alt="">
					<span>
						<strong>Backpack ERA</strong>
						Bags
					</span>
				</a>
			</div>
			
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-03.jpg" alt="">
					<span>
						<strong>Leather Sneakers</strong>
						Shoes
					</span>
				</a>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-04.jpg" alt="">
					<span>
						<strong>Long Shelve</strong>
						Furniture
					</span>
				</a>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-05.jpg" alt="">
					<span>
						<strong>Wood Glasses</strong>
						Accessories
					</span>
				</a>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="metro-banner">
				<a href="#">
					<img src="image/catalog/metro/banner-06.jpg" alt="">
					<span>
						<strong>Wood Ottoman</strong>
						Furnitures
					</span>
				</a>
			</div>
		</div>
	</div>
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