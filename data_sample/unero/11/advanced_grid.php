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
    'custom_class' => 'footer-2',
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
        'width' => '3',
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
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="copyright">© Unero 2017<br>All Rights Reseverd</div>',
              1 => '<div class="copyright">© Unero 2017<br>All Rights Reseverd</div>',
              2 => '<div class="copyright">© Unero 2017<br>All Rights Reseverd</div>',
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
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => '',
                1 => '',
                2 => '',
              ),
              'limit' => '10',
              'array' => 
              array (
                1 => 
                array (
                  'name' => 
                  array (
                    $language_id => 'Site Map',
                    1 => 'Site Map',
                    2 => 'Site Map',
                  ),
                  'url' => '#',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    $language_id => 'Term & Conditions',
                    1 => 'Term & Conditions',
                    2 => 'Term & Conditions',
                  ),
                  'url' => '#',
                  'sort' => '2',
                ),
                3 => 
                array (
                  'name' => 
                  array (
                    $language_id => 'Privacy Policy',
                    1 => 'Privacy Policy',
                    2 => 'Privacy Policy',
                  ),
                  'url' => '#',
                  'sort' => '3',
                ),
                4 => 
                array (
                  'name' => 
                  array (
                    $language_id => 'Help',
                    1 => 'Help',
                    2 => 'Help',
                  ),
                  'url' => '#',
                  'sort' => '4',
                ),
                5 => 
                array (
                  'name' => 
                  array (
                    $language_id => 'Affiliate',
                    1 => 'Affiliate',
                    2 => 'Affiliate',
                  ),
                  'url' => '#',
                  'sort' => '5',
                ),
              ),
            ),
          ),
        ),
      ),
      4 => 
      array (
        'status' => '1',
        'width' => '2',
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
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => '',
                1 => '',
                2 => '',
              ),
              'limit' => '10',
              'array' => 
              array (
                6 => 
                array (
                  'name' => 
                  array (
                    $language_id => 'Our Location',
                    1 => 'Our Location',
                    2 => 'Our Location',
                  ),
                  'url' => '#',
                  'sort' => '1',
                ),
                7 => 
                array (
                  'name' => 
                  array (
                    $language_id => 'Career',
                    1 => 'Career',
                    2 => 'Career',
                  ),
                  'url' => '#',
                  'sort' => '2',
                ),
                8 => 
                array (
                  'name' => 
                  array (
                    $language_id => 'About',
                    1 => 'About',
                    2 => 'About',
                  ),
                  'url' => '#',
                  'sort' => '3',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    $language_id => 'Contact',
                    1 => 'Contact',
                    2 => 'Contact',
                  ),
                  'url' => '#',
                  'sort' => '4',
                ),
              ),
            ),
          ),
        ),
      ),
      5 => 
      array (
        'status' => '1',
        'width' => '2',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '5',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="follow-us">
<ul>
<li><a target="_blank" href="#" class="fa fa-facebook"></a></li>
<li><a target="_blank" href="#" class="fa fa-twitter"></a></li>
<li><a target="_blank" href="#" class="fa fa-instagram"></a></li>
</ul>
</div>',
              1 => '<div class="follow-us">
<ul>
<li><a target="_blank" href="#" class="fa fa-facebook"></a></li>
<li><a target="_blank" href="#" class="fa fa-twitter"></a></li>
<li><a target="_blank" href="#" class="fa fa-instagram"></a></li>
</ul>
</div>',
              2 => '<div class="follow-us">
<ul>
<li><a target="_blank" href="#" class="fa fa-facebook"></a></li>
<li><a target="_blank" href="#" class="fa fa-twitter"></a></li>
<li><a target="_blank" href="#" class="fa fa-instagram"></a></li>
</ul>
</div>',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => 'home-category-boxes',
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
    'sort_order' => '2',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      6 => 
      array (
        'status' => '1',
        'width' => '6',
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
              $language_id => '<div class="home-category-box-overflow">
	<div class="home-category-box first">
        <a href="#">
        	<img src="image/catalog/minimal/minimal-banner-01.jpg" alt="">
        	<h2>Simple Sneakers</h2>
        </a>           
                         
        <span class="subtitle">Sale Up  To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box third">
        <a href="#">
        	<img src="image/catalog/minimal/minimal-banner-03.jpg" alt="">
        	<h2>Wood DIY Collection</h2>
        </a>           
                         
        <span class="subtitle" style="top: 345px;left:-70px;">available on store</span>
	</div>
</div>',
              1 => '<div class="home-category-box-overflow">
	<div class="home-category-box first">
        <a href="#">
        	<img src="image/catalog/minimal/minimal-banner-01.jpg" alt="">
        	<h2>Simple Sneakers</h2>
        </a>           
                         
        <span class="subtitle">Sale Up  To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box third">
        <a href="#">
        	<img src="image/catalog/minimal/minimal-banner-03.jpg" alt="">
        	<h2>Wood DIY Collection</h2>
        </a>           
                         
        <span class="subtitle" style="top: 345px;left:-70px;">available on store</span>
	</div>
</div>',
              2 => '<div class="home-category-box-overflow">
	<div class="home-category-box first">
        <a href="#">
        	<img src="image/catalog/minimal/minimal-banner-01.jpg" alt="">
        	<h2>Simple Sneakers</h2>
        </a>           
                         
        <span class="subtitle">Sale Up  To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box third">
        <a href="#">
        	<img src="image/catalog/minimal/minimal-banner-03.jpg" alt="">
        	<h2>Wood DIY Collection</h2>
        </a>           
                         
        <span class="subtitle" style="top: 345px;left:-70px;">available on store</span>
	</div>
</div>',
            ),
          ),
        ),
      ),
      7 => 
      array (
        'status' => '1',
        'width' => '6',
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
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="home-category-box-overflow">
	<div class="home-category-box right fourth">
        <a href="#">
        	<img src="image/catalog/minimal/minimal-banner-02.jpg" alt="">
        	<h2>House Decor</h2>
        </a>           
                         
        <span class="subtitle" style="left: auto;top: 0px;right: -70px">Sale Up To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
 <div class="new-arrivals"><a href="#">View all<br>new arrivals</a></div>
</div>',
              1 => '<div class="home-category-box-overflow">
	<div class="home-category-box right fourth">
        <a href="#">
        	<img src="image/catalog/minimal/minimal-banner-02.jpg" alt="">
        	<h2>House Decor</h2>
        </a>           
                         
        <span class="subtitle" style="left: auto;top: 0px;right: -70px">Sale Up To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
 <div class="new-arrivals"><a href="#">View all<br>new arrivals</a></div>
</div>',
              2 => '<div class="home-category-box-overflow">
	<div class="home-category-box right fourth">
        <a href="#">
        	<img src="image/catalog/minimal/minimal-banner-02.jpg" alt="">
        	<h2>House Decor</h2>
        </a>           
                         
        <span class="subtitle" style="left: auto;top: 0px;right: -70px">Sale Up To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
 <div class="new-arrivals"><a href="#">View all<br>new arrivals</a></div>
</div>',
            ),
          ),
        ),
      ),
      8 => 
      array (
        'status' => '1',
        'width' => '12',
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
              $language_id => '<script type="text/javascript">
// Changing the defaults
window.sr = ScrollReveal({ reset: true });

// Customizing a reveal set
sr.reveal(\'.home-category-box-overflow\', { duration: 500, opacity: 1 });
</script>',
              1 => '<script type="text/javascript">
// Changing the defaults
window.sr = ScrollReveal({ reset: true });

// Customizing a reveal set
sr.reveal(\'.home-category-box-overflow\', { duration: 500, opacity: 1 });
</script>',
              2 => '<script type="text/javascript">
// Changing the defaults
window.sr = ScrollReveal({ reset: true });

// Customizing a reveal set
sr.reveal(\'.home-category-box-overflow\', { duration: 500, opacity: 1 });
</script>',
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
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
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      9 => 
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
              'module_layout' => 'home_boxed.tpl',
              'title' => 
              array (
                $language_id => 'Get Discount 20% Off',
                1 => 'Get Discount 20% Off',
                2 => 'Get Discount 20% Off',
              ),
              'text' => 
              array (
                $language_id => 'Subscribe our newsletter and get discount 20% off',
                1 => 'Subscribe our newsletter and get discount 20% off',
                2 => 'Subscribe our newsletter and get discount 20% off',
              ),
              'input_placeholder' => 
              array (
                $language_id => 'Enter your email...',
                1 => 'Enter your email...',
                2 => 'Enter your email...',
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
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>