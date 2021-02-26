<?php 

$language_id = 3;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1 && $language['language_id'] != 2) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["megamenu_module"] = array (
  0 => 
  array (
    'module_id' => 0,
    'layout_id' => '99999',
    'position' => 'menu',
    'status' => '1',
    'display_on_mobile' => '0',
    'sort_order' => 0,
    'orientation' => '0',
    'search_bar' => 0,
    'navigation_text' => 
    array (
      $language_id => '',
      1 => '',
      2 => '',
    ),
    'home_text' => 
    array (
      $language_id => 'Home',
      1 => 'Home',
      2 => 'Home',
    ),
    'full_width' => '0',
    'home_item' => 'text',
    'animation' => 'shift-up',
    'animation_time' => 200,
    'status_cache' => 0,
    'cache_time' => 1,
  ),
);
 
$this->model_setting_setting->editSetting( "megamenu", $output );

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu`
");

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu_modules`
");

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu_links`
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`module_id` int(11) NOT NULL DEFAULT '0',
		`parent_id` int(11) NOT NULL,
		`rang` int(11) NOT NULL,
		`icon` varchar(255) NOT NULL DEFAULT '',
		`name` text,
		`link` text,
		`description` text,
		`label` text,
		`label_text_color` text,
		`label_background_color` text,
		`custom_class` text,
		`new_window` int(11) NOT NULL DEFAULT '0',
		`status` int(11) NOT NULL DEFAULT '0',
		`display_on_mobile` int(11) NOT NULL DEFAULT '0',
		`position` int(11) NOT NULL DEFAULT '0',
		`submenu_width` text,
		`submenu_type` int(11) NOT NULL DEFAULT '0',
		`submenu_background` text,
		`submenu_background_position` text,
		`submenu_background_repeat` text,
		`content_width` int(11) NOT NULL DEFAULT '12',
		`content_type` int(11) NOT NULL DEFAULT '0',
		`content` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu_modules` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`name` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu_links` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`name` text,
		`name_for_autocomplete` text,
		`url` text,
		`label` text,
		`label_text` text,
		`label_background` text,
		`image` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
     INSERT INTO `".DB_PREFIX."mega_menu_links` (`id`, `name`, `name_for_autocomplete`, `url`, `label`, `label_text`, `label_background`, `image`) VALUES
     (1, 'a:3:{i:" . $language_id . ";s:8:\"About us\";i:1;s:8:\"About us\";i:2;s:8:\"About us\";}', 'About us', 'index.php?route=information/information&amp;information_id=4', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (2, 'a:3:{i:" . $language_id . ";s:10:\"Contact us\";i:1;s:10:\"Contact us\";i:2;s:10:\"Contact us\";}', 'Contact us', 'index.php?route=information/contact', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (3, 'a:3:{i:" . $language_id . ";s:3:\"FAQ\";i:1;s:3:\"FAQ\";i:2;s:3:\"FAQ\";}', 'FAQ', 'index.php?route=extension/module/faq', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (4, 'a:3:{i:" . $language_id . ";s:3:\"404\";i:1;s:3:\"404\";i:2;s:3:\"404\";}', '404', 'index.php?route=extension/module/404', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (5, 'a:3:{i:" . $language_id . ";s:4:\"Shop\";i:1;s:4:\"Shop\";i:2;s:4:\"Shop\";}', 'Shop', 'index.php?route=product/category&amp;path=20', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (6, 'a:3:{i:" . $language_id . ";s:12:\"Shop Default\";i:1;s:12:\"Shop Default\";i:2;s:12:\"Shop Default\";}', 'Shop Default', 'index.php?route=product/category&amp;path=20', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (7, 'a:3:{i:" . $language_id . ";s:15:\"Shop Categories\";i:1;s:15:\"Shop Categories\";i:2;s:15:\"Shop Categories\";}', 'Shop Categories', 'index.php?route=product/category&amp;path=20', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (8, 'a:3:{i:" . $language_id . ";s:17:\"Shop With Sidebar\";i:1;s:17:\"Shop With Sidebar\";i:2;s:17:\"Shop With Sidebar\";}', 'Shop With Sidebar', 'index.php?route=product/category&amp;path=20', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (9, 'a:3:{i:" . $language_id . ";s:15:\"Shop Full Width\";i:1;s:15:\"Shop Full Width\";i:2;s:15:\"Shop Full Width\";}', 'Shop Full Width', 'index.php?route=product/category&amp;path=20', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (10, 'a:3:{i:" . $language_id . ";s:13:\"Shop 3 Column\";i:1;s:13:\"Shop 3 Column\";i:2;s:13:\"Shop 3 Column\";}', 'Shop 3 Column', 'index.php?route=product/category&amp;path=20', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (11, 'a:3:{i:" . $language_id . ";s:16:\"Shop 2 Column V1\";i:1;s:16:\"Shop 2 Column V1\";i:2;s:16:\"Shop 2 Column V1\";}', 'Shop 2 Column V1', 'index.php?route=product/category&amp;path=20', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (12, 'a:3:{i:" . $language_id . ";s:16:\"Shop 2 Column V2\";i:1;s:16:\"Shop 2 Column V2\";i:2;s:16:\"Shop 2 Column V2\";}', 'Shop 2 Column V2', 'index.php?route=product/category&amp;path=20', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (13, 'a:3:{i:" . $language_id . ";s:13:\"Product Pages\";i:1;s:13:\"Product Pages\";i:2;s:13:\"Product Pages\";}', 'Product Pages', 'index.php?route=product/product&amp;path=20&amp;product_id=28', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (14, 'a:3:{i:" . $language_id . ";s:6:\"Simple\";i:1;s:6:\"Simple\";i:2;s:6:\"Simple\";}', 'Simple', 'index.php?route=product/product&amp;path=20&amp;product_id=28', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (15, 'a:3:{i:" . $language_id . ";s:8:\"Variable\";i:1;s:8:\"Variable\";i:2;s:8:\"Variable\";}', 'Variable', 'index.php?route=product/product&amp;path=20&amp;product_id=28', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (16, 'a:3:{i:" . $language_id . ";s:12:\"Configurable\";i:1;s:12:\"Configurable\";i:2;s:12:\"Configurable\";}', 'Configurable', 'index.php?route=product/product&amp;path=20&amp;product_id=28', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (17, 'a:3:{i:" . $language_id . ";s:8:\"Groupped\";i:1;s:8:\"Groupped\";i:2;s:8:\"Groupped\";}', 'Groupped', 'index.php?route=product/product&amp;path=20&amp;product_id=28', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (18, 'a:3:{i:" . $language_id . ";s:19:\"Extended - Affilate\";i:1;s:19:\"Extended - Affilate\";i:2;s:19:\"Extended - Affilate\";}', 'Extended - Affilate', 'index.php?route=product/product&amp;path=20&amp;product_id=28', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (19, 'a:3:{i:" . $language_id . ";s:12:\"Downloadable\";i:1;s:12:\"Downloadable\";i:2;s:12:\"Downloadable\";}', 'Downloadable', 'index.php?route=product/product&amp;path=20&amp;product_id=28', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (20, 'a:3:{i:" . $language_id . ";s:12:\"Out Of Stock\";i:1;s:12:\"Out Of Stock\";i:2;s:12:\"Out Of Stock\";}', 'Out Of Stock', 'index.php?route=product/product&amp;path=20&amp;product_id=28', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (21, 'a:3:{i:" . $language_id . ";s:7:\"On Sale\";i:1;s:7:\"On Sale\";i:2;s:7:\"On Sale\";}', 'On Sale', 'index.php?route=product/product&amp;path=20&amp;product_id=28', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (22, 'a:3:{i:" . $language_id . ";s:10:\"Image Zoom\";i:1;s:10:\"Image Zoom\";i:2;s:10:\"Image Zoom\";}', 'Image Zoom', 'index.php?route=product/product&amp;path=20&amp;product_id=28', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (23, 'a:3:{i:" . $language_id . ";s:11:\"Other Pages\";i:1;s:11:\"Other Pages\";i:2;s:11:\"Other Pages\";}', 'Other Pages', '#', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (24, 'a:3:{i:" . $language_id . ";s:13:\"Shopping Cart\";i:1;s:13:\"Shopping Cart\";i:2;s:13:\"Shopping Cart\";}', 'Shopping Cart', 'index.php?route=checkout/cart', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (25, 'a:3:{i:" . $language_id . ";s:8:\"Checkout\";i:1;s:8:\"Checkout\";i:2;s:8:\"Checkout\";}', 'Checkout', 'index.php?route=checkout/checkout', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (26, 'a:3:{i:" . $language_id . ";s:8:\"Wishlist\";i:1;s:8:\"Wishlist\";i:2;s:8:\"Wishlist\";}', 'Wishlist', '#', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (27, 'a:3:{i:" . $language_id . ";s:10:\"My Account\";i:1;s:10:\"My Account\";i:2;s:10:\"My Account\";}', 'My Account', 'index.php?route=account/account', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', ''),
     (28, 'a:3:{i:" . $language_id . ";s:14:\"Order Tracking\";i:1;s:14:\"Order Tracking\";i:2;s:14:\"Order Tracking\";}', 'Order Tracking', '#', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', '')
");

$query = $this->db->query("
     INSERT INTO `".DB_PREFIX."mega_menu` (`id`, `module_id`, `parent_id`, `rang`, `icon`, `name`, `link`, `description`, `label`, `label_text_color`, `label_background_color`, `custom_class`, `new_window`, `status`, `display_on_mobile`, `position`, `submenu_width`, `submenu_type`, `submenu_background`, `submenu_background_position`, `submenu_background_repeat`, `content_width`, `content_type`, `content`) VALUES
     (1, 0, 0, 0, '', 'a:3:{i:" . $language_id . ";s:4:\"Shop\";i:1;s:4:\"Shop\";i:2;s:4:\"Shop\";}', 'index.php?route=product/category&amp;path=20', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '900px', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (2, 0, 0, 3, '', 'a:3:{i:" . $language_id . ";s:5:\"Pages\";i:1;s:5:\"Pages\";i:2;s:5:\"Pages\";}', '', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '230px', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (3, 0, 0, 6, '', 'a:3:{i:" . $language_id . ";s:14:\"Buy this theme\";i:1;s:14:\"Buy this theme\";i:2;s:14:\"Buy this theme\";}', '#', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', 'a:3:{i:" . $language_id . ";s:3:\"Hot\";i:1;s:3:\"Hot\";i:2;s:3:\"Hot\";}', '#fff', '#c00', '', 0, 0, 0, 0, '500px', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (4, 0, 0, 5, '', 'a:3:{i:" . $language_id . ";s:4:\"Blog\";i:1;s:4:\"Blog\";i:2;s:4:\"Blog\";}', 'index.php?route=blog/blog', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (5, 0, 2, 4, '', 'a:3:{i:" . $language_id . ";s:5:\"Links\";i:1;s:5:\"Links\";i:2;s:5:\"Links\";}', '', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:4:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"About us\";s:2:\"id\";i:1;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:10:\"Contact us\";s:2:\"id\";i:2;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:3:\"FAQ\";s:2:\"id\";i:3;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";i:404;s:2:\"id\";i:4;}}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (6, 0, 1, 1, '', 'a:3:{i:" . $language_id . ";s:5:\"Links\";i:1;s:5:\"Links\";i:2;s:5:\"Links\";}', '', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 8, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:3:{i:0;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:4:\"Shop\";s:2:\"id\";i:5;s:8:\"children\";a:7:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Shop Default\";s:2:\"id\";i:6;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Shop Categories\";s:2:\"id\";i:7;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:17:\"Shop With Sidebar\";s:2:\"id\";i:8;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:15:\"Shop Full Width\";s:2:\"id\";i:9;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Shop 3 Column\";s:2:\"id\";i:10;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:16:\"Shop 2 Column V1\";s:2:\"id\";i:11;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:16:\"Shop 2 Column V2\";s:2:\"id\";i:12;}}}i:1;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Product Pages\";s:2:\"id\";i:13;s:8:\"children\";a:9:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:6:\"Simple\";s:2:\"id\";i:14;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"Variable\";s:2:\"id\";i:15;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Configurable\";s:2:\"id\";i:16;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"Groupped\";s:2:\"id\";i:17;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:19:\"Extended - Affilate\";s:2:\"id\";i:18;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Downloadable\";s:2:\"id\";i:19;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Out Of Stock\";s:2:\"id\";i:20;}i:7;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:7:\"On Sale\";s:2:\"id\";i:21;}i:8;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:10:\"Image Zoom\";s:2:\"id\";i:22;}}}i:2;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:11:\"Other Pages\";s:2:\"id\";i:23;s:8:\"children\";a:5:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:13:\"Shopping Cart\";s:2:\"id\";i:24;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"Checkout\";s:2:\"id\";i:25;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"Wishlist\";s:2:\"id\";i:26;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:10:\"My Account\";s:2:\"id\";i:27;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Order Tracking\";s:2:\"id\";i:28;}}}}s:7:\"columns\";s:1:\"3\";s:7:\"submenu\";s:1:\"2\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (7, 0, 1, 2, '', 'a:3:{i:" . $language_id . ";s:6:\"Banner\";i:1;s:6:\"Banner\";i:2;s:6:\"Banner\";}', '', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', 'a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}', '', '', '', 0, 0, 1, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:3:{i:" . $language_id . ";s:205:\"&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/megamenu-banner.jpg&quot; style=&quot;display: block;margin: -20px -30px;float: right;max-width: none;&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;\";i:1;s:205:\"&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/megamenu-banner.jpg&quot; style=&quot;display: block;margin: -20px -30px;float: right;max-width: none;&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;\";i:2;s:205:\"&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/megamenu-banner.jpg&quot; style=&quot;display: block;margin: -20px -30px;float: right;max-width: none;&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:3:{i:" . $language_id . ";s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}')
");

?>