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
      $language_id => '	<div class="home-banners clearfix">
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-01.jpg" alt=""></a></div>
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-02.jpg" alt=""></a></div>
	</div>
	
	<div class="home-banners clearfix">
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-03.jpg" alt=""></a></div>
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-04.jpg" alt=""></a></div>
	</div>',
      1 => '	<div class="home-banners clearfix">
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-01.jpg" alt=""></a></div>
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-02.jpg" alt=""></a></div>
	</div>
	
	<div class="home-banners clearfix">
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-03.jpg" alt=""></a></div>
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-04.jpg" alt=""></a></div>
	</div>',
      2 => '	<div class="home-banners clearfix">
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-01.jpg" alt=""></a></div>
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-02.jpg" alt=""></a></div>
	</div>
	
	<div class="home-banners clearfix">
		<div class="small"><a href="#"><img src="image/catalog/classic/banner-03.jpg" alt=""></a></div>
		<div class="big"><a href="#"><img src="image/catalog/classic/banner-04.jpg" alt=""></a></div>
	</div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '1',
  ),
  3 => 
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
      $language_id => '<div class="box box-instagram">
	<a class="next" href="#Instagram" id="Instagram_next"><span></span></a>
	<a class="prev" href="#Instagram" id="Instagram_prev"><span></span></a>
	
	<div class="box-heading">See It Styled On Instagram</div>
	
	<div class="box-content">
		<div id="Instagram" class="carousel slide">
			<div class="carousel-inner">
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram1.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram2.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram3.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram4.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram5.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram1.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram2.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  var Instagram = $("#Instagram .carousel-inner");
	
  $("#Instagram_next").click(function(){
      Instagram.trigger(\'owl.next\');
      return false;
    })
    
  $("#Instagram_prev").click(function(){
      Instagram.trigger(\'owl.prev\');
      return false;
  });
    
  Instagram.owlCarousel({
  	  slideSpeed : 500,
      items: 5,
      autoPlay : 5000,
      stopOnHover : false,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [991,3],
      itemsMobile : [767,2]
  });
});
</script>',
      1 => '<div class="box box-instagram">
	<a class="next" href="#Instagram" id="Instagram_next"><span></span></a>
	<a class="prev" href="#Instagram" id="Instagram_prev"><span></span></a>
	
	<div class="box-heading">See It Styled On Instagram</div>
	
	<div class="box-content">
		<div id="Instagram" class="carousel slide">
			<div class="carousel-inner">
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram1.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram2.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram3.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram4.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram5.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram1.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram2.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  var Instagram = $("#Instagram .carousel-inner");
	
  $("#Instagram_next").click(function(){
      Instagram.trigger(\'owl.next\');
      return false;
    })
    
  $("#Instagram_prev").click(function(){
      Instagram.trigger(\'owl.prev\');
      return false;
  });
    
  Instagram.owlCarousel({
  	  slideSpeed : 500,
      items: 5,
      autoPlay : 5000,
      stopOnHover : false,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [991,3],
      itemsMobile : [767,2]
  });
});
</script>',
      2 => '<div class="box box-instagram">
	<a class="next" href="#Instagram" id="Instagram_next"><span></span></a>
	<a class="prev" href="#Instagram" id="Instagram_prev"><span></span></a>
	
	<div class="box-heading">See It Styled On Instagram</div>
	
	<div class="box-content">
		<div id="Instagram" class="carousel slide">
			<div class="carousel-inner">
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram1.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram2.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram3.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram4.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram5.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram1.jpg" alt=""></a>
				</div>
				
				<div class="instagram">
					<a href="#" target="_blank"><img src="image/catalog/collection/instagram2.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  var Instagram = $("#Instagram .carousel-inner");
	
  $("#Instagram_next").click(function(){
      Instagram.trigger(\'owl.next\');
      return false;
    })
    
  $("#Instagram_prev").click(function(){
      Instagram.trigger(\'owl.prev\');
      return false;
  });
    
  Instagram.owlCarousel({
  	  slideSpeed : 500,
      items: 5,
      autoPlay : 5000,
      stopOnHover : false,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [991,3],
      itemsMobile : [767,2]
  });
});
</script>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '5',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>