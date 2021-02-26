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
    'custom_class' => 'footer-5',
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
              $language_id => '<div class="footer-socials">
	<label>Follow Us on Social</label>
	<a target="_blank" href="#" class="fa fa-facebook"></a>
	<a target="_blank" href="#" class="fa fa-twitter"></a>
	<a target="_blank" href="#" class="fa fa-instagram"></a>
</div>

<div class="copyright">
	© 2017 <span>Unero</span>. All rights reserved
</div>',
              1 => '<div class="footer-socials">
	<label>Follow Us on Social</label>
	<a target="_blank" href="#" class="fa fa-facebook"></a>
	<a target="_blank" href="#" class="fa fa-twitter"></a>
	<a target="_blank" href="#" class="fa fa-instagram"></a>
</div>

<div class="copyright">
	© 2017 <span>Unero</span>. All rights reserved
</div>',
              2 => '<div class="footer-socials">
	<label>Follow Us on Social</label>
	<a target="_blank" href="#" class="fa fa-facebook"></a>
	<a target="_blank" href="#" class="fa fa-twitter"></a>
	<a target="_blank" href="#" class="fa fa-instagram"></a>
</div>

<div class="copyright">
	© 2017 <span>Unero</span>. All rights reserved
</div>',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
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
    'background_color' => '#f3f3f3',
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
      2 => 
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
              $language_id => '<link rel=\'stylesheet\' href=\'//fonts.googleapis.com/css?family=Oswald%3A300%2Cregular%2C700&#038;ver=4.9.1\' type=\'text/css\' media=\'all\' /><link rel=\'stylesheet\' href=\'//fonts.googleapis.com/css?family=Libre+Baskerville%3Aregular%2Citalic%2C700&#038;ver=4.9.1\' type=\'text/css\' media=\'all\' />

<div class="product-landing-quote">
	<div class="heading">Wood Vase decorate</div>
	<div class="text">
		“ The planter’s droplet shape creates a striking display for your favorite plant to take root. Hang a single plant, or create a pattern with multiples. ”
	</div>
</div>',
              1 => '<link rel=\'stylesheet\' href=\'//fonts.googleapis.com/css?family=Oswald%3A300%2Cregular%2C700&#038;ver=4.9.1\' type=\'text/css\' media=\'all\' /><link rel=\'stylesheet\' href=\'//fonts.googleapis.com/css?family=Libre+Baskerville%3Aregular%2Citalic%2C700&#038;ver=4.9.1\' type=\'text/css\' media=\'all\' />

<div class="product-landing-quote">
	<div class="heading">Wood Vase decorate</div>
	<div class="text">
		“ The planter’s droplet shape creates a striking display for your favorite plant to take root. Hang a single plant, or create a pattern with multiples. ”
	</div>
</div>',
              2 => '<link rel=\'stylesheet\' href=\'//fonts.googleapis.com/css?family=Oswald%3A300%2Cregular%2C700&#038;ver=4.9.1\' type=\'text/css\' media=\'all\' /><link rel=\'stylesheet\' href=\'//fonts.googleapis.com/css?family=Libre+Baskerville%3Aregular%2Citalic%2C700&#038;ver=4.9.1\' type=\'text/css\' media=\'all\' />

<div class="product-landing-quote">
	<div class="heading">Wood Vase decorate</div>
	<div class="text">
		“ The planter’s droplet shape creates a striking display for your favorite plant to take root. Hang a single plant, or create a pattern with multiples. ”
	</div>
</div>',
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
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      3 => 
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
              $language_id => '<div class="box-product-landing clearfix">
	<div class="left">
		<div class="box1">
			<div class="heading">Design story</div>
			<div class="text">
				Logan was intrigued by the idea
				of combining two materials into a
				singular form using the 3D printing
				process. The planter’s duality makes
				use of each material’s inherent
				properties; polished metal for an ultra
				precise bracket and porcelain for a
				smooth, voluminous container.
			</div>
		</div>
	</div>
	
	<div class="right">
		<div class="box-banner"><img src="image/catalog/landing/landing2.jpg" alt=""></div>
	</div>
</div>

<div class="box-product-landing clearfix">
	<div class="left">
		<div class="box-banner"><img src="image/catalog/landing/landing3.jpg" alt=""></div>
	</div>
	
	<div class="right">
		<div class="box2">
			<div class="heading">Detail product</div>
			<div class="text">
				This droplet-shaped planter is crafted in 3D Printed Porcelain, with the option of a 3D Printed Polished Gold Steel or 3D Printed Polished Bronze hook. Available with drainage hole or without for outdoor or indoor use. Numbered Edition.
				<div class="spec"><span>material:</span> Natural Wood J18</div>
				<div class="spec"><span>dimension:</span> 3.25”W  x  7.75”H  x  3.25”D</div>
			</div>
		</div>
	</div>
</div>

<div class="box-product-landing clearfix">
	<div class="box-banner"><img src="image/catalog/landing/landing4.jpg" alt=""></div>
</div>',
              1 => '<div class="box-product-landing clearfix">
	<div class="left">
		<div class="box1">
			<div class="heading">Design story</div>
			<div class="text">
				Logan was intrigued by the idea
				of combining two materials into a
				singular form using the 3D printing
				process. The planter’s duality makes
				use of each material’s inherent
				properties; polished metal for an ultra
				precise bracket and porcelain for a
				smooth, voluminous container.
			</div>
		</div>
	</div>
	
	<div class="right">
		<div class="box-banner"><img src="image/catalog/landing/landing2.jpg" alt=""></div>
	</div>
</div>

<div class="box-product-landing clearfix">
	<div class="left">
		<div class="box-banner"><img src="image/catalog/landing/landing3.jpg" alt=""></div>
	</div>
	
	<div class="right">
		<div class="box2">
			<div class="heading">Detail product</div>
			<div class="text">
				This droplet-shaped planter is crafted in 3D Printed Porcelain, with the option of a 3D Printed Polished Gold Steel or 3D Printed Polished Bronze hook. Available with drainage hole or without for outdoor or indoor use. Numbered Edition.
				<div class="spec"><span>material:</span> Natural Wood J18</div>
				<div class="spec"><span>dimension:</span> 3.25”W  x  7.75”H  x  3.25”D</div>
			</div>
		</div>
	</div>
</div>

<div class="box-product-landing clearfix">
	<div class="box-banner"><img src="image/catalog/landing/landing4.jpg" alt=""></div>
</div>',
              2 => '<div class="box-product-landing clearfix">
	<div class="left">
		<div class="box1">
			<div class="heading">Design story</div>
			<div class="text">
				Logan was intrigued by the idea
				of combining two materials into a
				singular form using the 3D printing
				process. The planter’s duality makes
				use of each material’s inherent
				properties; polished metal for an ultra
				precise bracket and porcelain for a
				smooth, voluminous container.
			</div>
		</div>
	</div>
	
	<div class="right">
		<div class="box-banner"><img src="image/catalog/landing/landing2.jpg" alt=""></div>
	</div>
</div>

<div class="box-product-landing clearfix">
	<div class="left">
		<div class="box-banner"><img src="image/catalog/landing/landing3.jpg" alt=""></div>
	</div>
	
	<div class="right">
		<div class="box2">
			<div class="heading">Detail product</div>
			<div class="text">
				This droplet-shaped planter is crafted in 3D Printed Porcelain, with the option of a 3D Printed Polished Gold Steel or 3D Printed Polished Bronze hook. Available with drainage hole or without for outdoor or indoor use. Numbered Edition.
				<div class="spec"><span>material:</span> Natural Wood J18</div>
				<div class="spec"><span>dimension:</span> 3.25”W  x  7.75”H  x  3.25”D</div>
			</div>
		</div>
	</div>
</div>

<div class="box-product-landing clearfix">
	<div class="box-banner"><img src="image/catalog/landing/landing4.jpg" alt=""></div>
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