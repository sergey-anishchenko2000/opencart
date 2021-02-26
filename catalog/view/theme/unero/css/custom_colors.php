<?php if($theme_options->get( 'font_status' ) == '1' || $theme_options->get( 'colors_status' ) == '1') { ?>
<style type="text/css">
	<?php if($theme_options->get( 'colors_status' ) == '1') { ?>
		<?php if($theme_options->get( 'body_background_color' ) != '') { ?>
		body {
			background: <?php echo $theme_options->get( 'body_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'main_color' ) != '') { ?>
		.sale,
		.scrollup:hover,
		.footer-2 .follow-us ul li a:hover,
		.home-boxed-newsletter .newsletter-content .subscribe,
		.browse-all-products:hover:before,
		.landing-product .add-to-cart a,
		.button-discover-now,
		.header-notice,
		.tagcloud a,
		.news .media-body .tags a,
		#top #cart_block .cart-count,
		.post .post-media .media-slider .owl-controls .owl-buttons .owl-prev:hover,
		.post .post-media .media-slider .owl-controls .owl-buttons .owl-next:hover,
		.post .tags a,
		.posts .button-more:hover {
			background: <?php echo $theme_options->get( 'main_color' ); ?>;
		}
		
		.posts .button-more:hover  {
			border-color: <?php echo $theme_options->get( 'main_color' ); ?>;
		}
		
		#main .mfilter-slider-slider .ui-slider-range, 
		#main #mfilter-price-slider .ui-slider-range {
			background: <?php echo $theme_options->get( 'main_color' ); ?> !important;
		}
		
		.product-grid .product .buttons2 .add-to-wishlist:hover:before,
		.product-grid .product .buttons2 .add-to-compare:hover:before,
		.product-grid .product .price .price-new,
		.product-list > div .price .price-new,
		.product-list > div .buttons2 .add-to-wishlist:hover:before,
		.product-list > div .buttons2 .add-to-compare:hover:before,
		.home-best-selling-products .hover .price .price-new,
		.filter-product .filter-tabs ul > li > a:hover,
		.filter-product .filter-tabs ul > li.active > a,
		.filter-product .filter-tabs ul > li.active > a:hover,
		.filter-product .filter-tabs ul > li.active > a:focus,
		.mini-cart-info .price,
		.mini-cart-total .right,
		.search-form-1 .product-cats input:checked+span,
		.search-form-1 .product-cats span:hover,
		.canvas-setting .header-follow-us .social-links-list a:hover,
		.box-category ul li a.active,
		.product-info .price .price-new2,
		.product-info .cart .links a:first-child:before,
		div.pagination-results ul li.active,
		table.attribute a:hover,
		table.list a:hover,
		.wishlist-product table a:hover,
		.wishlist-info table a:hover,
		.compare-info a:hover,
		.cart-info table a:hover,
		.checkout-product table a:hover,
		.table a:hover,
		.cart-total table tr td:last-child,
		.tags-list a:hover,
		.postWrapper .readmore a:hover,
		#main .footer-2 a:hover,
		.home-boxed-posts .media .media-body .read-more,
		.home-category-box a:hover h2,
		.home-category-newsletter .title span,
		.browse-all-products:hover,
		.parallax .parallax-content .link,
		.split-home .left .overflow .links a:hover,
		.header-notice a.close-notice,
		.contact-page .how-to-contact .contact-way .inner-contact span,
		.welcome-unero2 .second-heading span,
		.bestselling-products-tabs .select-tab li.active a,
		.boxed-unero-about .about .title,
		.home-slider .grid-backgrounds .grid-items .item.active a h2,
		a.view-collection,
		.shop-now,
		.discover-now,
		.post .meta > li a,
		.posts .button-more {
			color: <?php echo $theme_options->get( 'main_color' ); ?>;
		}
		
		.canvas-setting .language-currency .dropdown .dropdown-menu > li > a:hover,
		.canvas-setting .language-currency .dropdown .dropdown-menu > li.active > a,
		.ui-autocomplete li span.price {
			color: <?php echo $theme_options->get( 'main_color' ); ?> !important;
		}
		
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_background_color' ) != '') { ?>
		.footer .background, 
		.standard-body .footer .background {
			background: <?php echo $theme_options->get( 'footer_background_color' ); ?>;
		}
		<?php } ?>
	<?php } ?>
			
	<?php if($theme_options->get( 'font_status' ) == '1') { ?>
		body {
			font-size: <?php echo $theme_options->get( 'body_font_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'body_font_weight' )*100; ?>;
			<?php if( $theme_options->get( 'body_font' ) != '' && $theme_options->get( 'body_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'body_font' ); ?>;
			<?php } ?>
		}
		
		#top-bar .container, 
		#top .header-links li a,
		.sale,
		.product-grid .product .only-hover ul li a,
		.hover-product .only-hover ul li a {
			font-size: <?php echo $theme_options->get( 'body_font_smaller_px' ); ?>px;
		}
		
		ul.megamenu > li > a strong {
			font-size: <?php echo $theme_options->get( 'categories_bar_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'categories_bar_weight' )*100; ?>;
			<?php if( $theme_options->get( 'categories_bar' ) != '' && $theme_options->get( 'categories_bar' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_bar' ); ?>;
			<?php } ?>
		}
		
		.megamenuToogle-wrapper .container {
			font-weight: <?php echo $theme_options->get( 'categories_bar_weight' )*100; ?>;
			<?php if( $theme_options->get( 'categories_bar_font' ) != '' && $theme_options->get( 'categories_bar_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_bar_font' ); ?>;
			<?php } ?>
		}
		
		.vertical ul.megamenu > li > a strong {
			font-weight: <?php echo $theme_options->get( 'body_font_weight' )*100; ?>;
		}
		
		.box .box-heading,
		.center-column h1, 
		.center-column h2, 
		.center-column h3, 
		.center-column h4, 
		.center-column h5, 
		.center-column h6,
		.products-carousel-overflow .box-heading {
			font-size: <?php echo $theme_options->get( 'headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'headlines_weight' )*100; ?>;
			<?php if( $theme_options->get( 'headlines' ) != '' && $theme_options->get( 'headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'headlines' ); ?>;
			<?php } ?>
		}
		
		.footer h4,
		.custom-footer h4 {
			font-size: <?php echo $theme_options->get( 'footer_headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'footer_headlines_weight' )*100; ?>;
			<?php if( $theme_options->get( 'footer_headlines' ) != '' && $theme_options->get( 'footer_headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'footer_headlines' ); ?>;
			<?php } ?>
		}
		
		.breadcrumb .container h1 {
			font-size: <?php echo $theme_options->get( 'page_name_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'page_name_weight' )*100; ?>;
			<?php if( $theme_options->get( 'page_name' ) != '' && $theme_options->get( 'page_name' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'page_name' ); ?>;
			<?php } ?>
		}
		
		.button,
		.btn {
			font-size: <?php echo $theme_options->get( 'button_font_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'button_font_weight' )*100; ?>;
			<?php if( $theme_options->get( 'button_font' ) != '' && $theme_options->get( 'button_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'button_font' ); ?>;
			<?php } ?>
		}
		
		<?php if( $theme_options->get( 'custom_price' ) != '' && $theme_options->get( 'custom_price' ) != 'standard' ) { ?>
		.product-grid .product .price, 
		.hover-product .price, 
		.product-list .actions > div .price, 
		#main .product-info .price .price-new,
		ul.megamenu li .product .price,
		.advanced-grid-products .product .right .price {
			font-family: <?php echo $theme_options->get( 'custom_price' ); ?>;
		}
		<?php } ?>
		
		.product-grid .product .price,
		.advanced-grid-products .product .right .price {
			font-size: <?php echo $theme_options->get( 'custom_price_px_small' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		#main .product-info .price .price-new {
			font-size: <?php echo $theme_options->get( 'custom_price_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.product-list .actions > div .price {
			font-size: <?php echo $theme_options->get( 'custom_price_px_medium' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.price-old {
			font-size: <?php echo $theme_options->get( 'custom_price_px_old_price' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
	<?php } ?>
</style>
<?php } ?>

<?php if($theme_options->get( 'background_status' ) == 1) { ?>
<style type="text/css">
	<?php if($theme_options->get( 'body_background_background' ) == '1') { ?> 
	body { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body_background_background' ) == '2') { ?> 
	body { background-image:url(image/<?php echo $theme_options->get( 'body_background' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body_background_background' ) == '3') { ?> 
	body { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'body_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'header_background_background' ) == '1') { ?> 
	header { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'header_background_background' ) == '2') { ?> 
	header { background-image:url(image/<?php echo $theme_options->get( 'header_background' ); ?>);background-position:<?php echo $theme_options->get( 'header_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'header_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'header_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'header_background_background' ) == '3') { ?> 
	header { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'header_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'header_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'header_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'header_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'customfooter_background_background' ) == '1') { ?> 
	.custom-footer .pattern { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'customfooter_background_background' ) == '2') { ?> 
	.custom-footer .pattern { background-image:url(image/<?php echo $theme_options->get( 'customfooter_background' ); ?>);background-position:<?php echo $theme_options->get( 'customfooter_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'customfooter_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'customfooter_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'customfooter_background_background' ) == '3') { ?> 
	.custom-footer .pattern { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'customfooter_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'customfooter_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'customfooter_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'customfooter_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'content_headlines_background_background' ) == '1') { ?> 
	.box .strip-line,
	.breadcrumb .container .strip-line,
	.products-carousel-overflow .strip-line { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'content_headlines_background_background' ) == '2') { ?> 
	.box .strip-line,
	.breadcrumb .container .strip-line,
	.products-carousel-overflow .strip-line { background-image:url(image/<?php echo $theme_options->get( 'content_headlines_background' ); ?>); }
	<?php } ?>
	
	<?php if($theme_options->get( 'footer_headlines_background_background' ) == '1') { ?> 
	.footer .strip-line { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'footer_headlines_background_background' ) == '2') { ?> 
	.footer .strip-line { background-image:url(image/<?php echo $theme_options->get( 'footer_headlines_background' ); ?>); }
	<?php } ?>
</style>
<?php } ?>