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
              $language_id => '<div class="footer-logo"><img src="image/catalog/logo_unero_2.png" alt=""></div>',
              1 => '<div class="footer-logo"><img src="image/catalog/logo_unero_2.png" alt=""></div>',
              2 => '<div class="footer-logo"><img src="image/catalog/logo_unero_2.png" alt=""></div>',
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
    'sort_order' => '4',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      5 => 
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
        	<img src="image/catalog/category/home-category-banner1.jpg" alt="">
        	<h2>Chairs &amp; Sofas</h2>
        </a>           
                         
        <span class="subtitle">Sale Up  To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box second">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner2.jpg" alt="">
        	<h2>Eye Glass Collection</h2>
        </a>           
                         
        <span class="subtitle" style="top:120px;left: -47px;">Most wanted</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box third">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner3.jpg" alt="">
        	<h2>Light Trending 2017</h2>
        </a>           
                         
        <span class="subtitle" style="top: 345px;left:-70px;">available on store</span>
	</div>
</div>',
              1 => '<div class="home-category-box-overflow">
	<div class="home-category-box first">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner1.jpg" alt="">
        	<h2>Chairs &amp; Sofas</h2>
        </a>           
                         
        <span class="subtitle">Sale Up  To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box second">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner2.jpg" alt="">
        	<h2>Eye Glass Collection</h2>
        </a>           
                         
        <span class="subtitle" style="top:120px;left: -47px;">Most wanted</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box third">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner3.jpg" alt="">
        	<h2>Light Trending 2017</h2>
        </a>           
                         
        <span class="subtitle" style="top: 345px;left:-70px;">available on store</span>
	</div>
</div>',
              2 => '<div class="home-category-box-overflow">
	<div class="home-category-box first">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner1.jpg" alt="">
        	<h2>Chairs &amp; Sofas</h2>
        </a>           
                         
        <span class="subtitle">Sale Up  To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box second">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner2.jpg" alt="">
        	<h2>Eye Glass Collection</h2>
        </a>           
                         
        <span class="subtitle" style="top:120px;left: -47px;">Most wanted</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box third">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner3.jpg" alt="">
        	<h2>Light Trending 2017</h2>
        </a>           
                         
        <span class="subtitle" style="top: 345px;left:-70px;">available on store</span>
	</div>
</div>',
            ),
          ),
        ),
      ),
      6 => 
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
        	<img src="image/catalog/category/home-category-banner4.jpg" alt="">
        	<h2>Bags & Backpacks</h2>
        </a>           
                         
        <span class="subtitle" style="left: auto;top: 0px;right: -70px">Sale Up To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box right fifth">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner5.jpg" alt="">
        	<h2>Decoration</h2>
        </a>           
                         
        <span class="subtitle" style="top:0px;left: auto;right: -70px">sale up to 50% off</span>
	</div>
</div>',
              1 => '<div class="home-category-box-overflow">
	<div class="home-category-box right fourth">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner4.jpg" alt="">
        	<h2>Bags & Backpacks</h2>
        </a>           
                         
        <span class="subtitle" style="left: auto;top: 0px;right: -70px">Sale Up To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box right fifth">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner5.jpg" alt="">
        	<h2>Decoration</h2>
        </a>           
                         
        <span class="subtitle" style="top:0px;left: auto;right: -70px">sale up to 50% off</span>
	</div>
</div>',
              2 => '<div class="home-category-box-overflow">
	<div class="home-category-box right fourth">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner4.jpg" alt="">
        	<h2>Bags & Backpacks</h2>
        </a>           
                         
        <span class="subtitle" style="left: auto;top: 0px;right: -70px">Sale Up To 30% Off</span>
	</div>
</div>

<div class="home-category-box-overflow">
	<div class="home-category-box right fifth">
        <a href="#">
        	<img src="image/catalog/category/home-category-banner5.jpg" alt="">
        	<h2>Decoration</h2>
        </a>           
                         
        <span class="subtitle" style="top:0px;left: auto;right: -70px">sale up to 50% off</span>
	</div>
</div>',
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'home_category.tpl',
              'title' => 
              array (
                $language_id => 'Get <span>10%</span> Discount',
                1 => 'Get <span>10%</span> Discount',
                2 => 'Get <span>10%</span> Discount',
              ),
              'text' => 
              array (
                $language_id => 'Get 10% discount with notified about the latest news and updates. No spam, we promise !',
                1 => 'Get 10% discount with notified about the latest news and updates. No spam, we promise !',
                2 => 'Get 10% discount with notified about the latest news and updates. No spam, we promise !',
              ),
              'input_placeholder' => 
              array (
                $language_id => 'Enter your email address',
                1 => 'Enter your email address',
                2 => 'Enter your email address',
              ),
              'subscribe_text' => 
              array (
                $language_id => '',
                1 => '',
                2 => '',
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
      7 => 
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
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>