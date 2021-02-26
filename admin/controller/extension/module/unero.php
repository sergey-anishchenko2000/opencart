<?php
/* 
Template Name: Unero
Version: 1.0
Author: Artur Sułkowski
Website: http://artursulkowski.pl
*/

class ControllerExtensionModuleUnero extends Controller {
	
	private $error = array(); 
	
	public function index() {   
	
		//Load the language file for this module
		$this->language->load('extension/module/unero');

		//Set the title from the language file $_['heading_title'] string
		$this->document->setTitle('Unero Theme Options');
		
		//Load the settings model. You can also add any other models you want to load here.
		$this->load->model('setting/setting');
		
		// Multilanguage
		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		
		/* Konfiguracja kolorów */
		$data['colors_data'] = array(
			array(
				'name' => 'Body',
				'content' => array(
					array(
						'name' => 'Background color',
						'id'   => 'body_background_color'
					),
					array(
						'name' => 'Main color',
						'id'   => 'main_color'
					)
				)
			),
			array(
				'name' => 'Footer',
				'content' => array(
					array(
						'name' => 'Background color',
						'id'   => 'footer_background_color'
					)
				)
			)
		);
		
		foreach ($data['colors_data'] as $colors) {
			foreach($colors['content'] as $color) {
				$data[$color['id']] = false;
			}
		}
		
		// Konfiguracja zmiennych
		$config_data = array(
			'main_layout',
			'top_bar_layout',
			'header_layout',
			'slideshow_layout',
			'content_layout',
			'custom_footer_layout',
			'footer_layout',
			'breadcrumb_layout',
			
			'page_width',
			'max_width',
			
			'responsive_design',
			'body_custom_class',
			
			'add_to_compare_text',
			'add_to_wishlist_text',
			'checkout_text',
			'continue_shopping_text',
			'confirmation_text',
			'shopping_cart_text',
			'home_text',
			'welcome_text',
			'more_details_text',
			'quickview_text',
			'sale_text',
			'search_text',
			'all_categories_text',
			'search_close_text',
			'menu_text',
			
			'header_type',
			'quick_search_autosuggest',
			'select_demo',
			
			'product_per_pow',
			'product_per_pow2',
			'product_scroll_latest',
			'product_scroll_featured',
			'product_scroll_bestsellers',
			'product_scroll_specials',
			'product_scroll_related',
			'quick_view',
			'hover_product',
			'lazy_loading_images',
			'display_text_sale',
			'type_sale',
			'product_image_effect',
			'display_add_to_compare',
			'display_add_to_wishlist',
			'display_add_to_cart',
			'display_rating',
			'display_specials_countdown',
			'default_list_grid',
			'refine_search_style',
			'refine_image_width',
			'refine_image_height',
			'refine_search_number',
			'product_image_zoom',
			'product_image_size',
			'position_image_additional',
			'product_social_share',
			'product_related_status',
			'product_page_radio_style',
			'product_page_radio_image_width',
			'product_page_radio_image_height',
			'product_page_checkbox_style',
									
			'colors_status',
			
			'background_status',
			'body_background',
			'body_background_background',
			'body_background_subtle_patterns',
			'body_background_position',
			'body_background_repeat',
			'body_background_attachment',
			'header_background',
			'header_background_background',
			'header_background_subtle_patterns',
			'header_background_position',
			'header_background_repeat',
			'header_background_attachment',
			'customfooter_background',
			'customfooter_background_background',
			'customfooter_background_subtle_patterns',
			'customfooter_background_position',
			'customfooter_background_repeat',
			'customfooter_background_attachment',
			'content_headlines_background',
			'content_headlines_background_background',
			'footer_headlines_background',
			'footer_headlines_background_background',
						
			'font_status',
			'categories_bar',
			'categories_bar_weight',
			'categories_bar_px',
			'headlines',
			'headlines_weight',
			'headlines_px',
			'footer_headlines',
			'footer_headlines_weight',
			'footer_headlines_px',
			'body_font',
			'body_font_px',
			'body_font_weight',
			'body_font_smaller_px',
			'page_name',
			'page_name_weight',
			'page_name_px',
			'button_font',
			'button_font_weight',
			'button_font_px',
			'custom_price',
			'custom_price_weight',
			'custom_price_px',
			'custom_price_px_medium',
			'custom_price_px_small',
			'custom_price_px_old_price',
			
			'product_image_zoom',
			
			'product_scroll_latest',
			'product_scroll_featured',
			'product_scroll_bestsellers',
			'product_scroll_specials',
			'product_scroll_related',
			
			'custom_code_css_status',
			'custom_code_css',
			'custom_code_javascript_status',
			'custom_code_js',
			
			'refine_image_width',
			'refine_image_height',
			
			'widget_facebook_status',
			'widget_facebook_id',
			'widget_facebook_position',
			'widget_twitter_status',
			'widget_twitter_id',
			'widget_twitter_user_name',
			'widget_twitter_position',
			'widget_twitter_limit',
			'widget_custom_status',
			'widget_custom_content',
			'widget_custom_position',
			
			'compressor_code_status'
		);
		
		foreach ($config_data as $conf) {
			$data[$conf] = false;
		}

		// Funkcja do usuwania katalogu
		function removeDir($path) { 
			$dir = new DirectoryIterator($path); 
			foreach ($dir as $fileinfo) { 
				if ($fileinfo->isFile() || $fileinfo->isLink()) { 
					unlink($fileinfo->getPathName()); 
				} elseif (!$fileinfo->isDot() && $fileinfo->isDir()) { 
					removeDir($fileinfo->getPathName()); 
				} 
			} 
			rmdir($path); 
		}
		
  		// unero MUTLI STORE
  		
			if (isset($this->request->post['store_id'])) {
				$data['store_id'] = $this->request->post['store_id'];
			} else {
				$data['store_id'] = $this->config->get('d_store_id');
			}

			$data['stores'] = array();
			
			$this->load->model('setting/store');
			
			$results = $this->model_setting_store->getStores();
			
			$data['stores'][] = array(
				'name' => 'Default',
				'href' => '',
				'store_id' => 0
			);
				
			foreach ($results as $result) {
				$data['stores'][] = array(
					'name' => $result['name'],
					'href' => $result['url'],
					'store_id' => $result['store_id']
				);
			}		
			
			
			if(isset($_GET['store_id'])) {
				$data['store_id'] = $_GET['store_id'];
			} else {
				if (isset($_GET['submit'])) {
					$data['store_id'] = $data['store_id'];
				} else {
					if (isset($this->request->post['store_id'])) {
						$data['store_id'] = $this->request->post['store_id'];
					} else {
						$data['store_id'] = 0;
					}
				}
			}
			
			if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
				$data['array'] = array(
					'd_store_id' => $this->request->post['store_id']
				);
				$this->model_setting_setting->editSetting('d_id_store', $data['array']);	
			}
			
		// END MULTISTORE
		
		// Pobieranie informacji, która skórka jest włączona	
		$data['setting_skin'] = $this->model_setting_setting->getSetting('unero_skin', $data['store_id']);
		
		// Nadanie nazw sklepom 
		if($data['store_id'] == 0) {
			$data['edit_skin_store'] = 'default';
		} else {
			$data['edit_skin_store'] = $data['store_id'];
		}
		
		// Aktywna skórka
		if(isset($data['setting_skin']['unero_skin'])) {
			$data['active_skin'] = $data['setting_skin']['unero_skin'];
		} else {
			$data['active_skin'] = 'default';
		}
		
		if(!file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin'].'')) {
			$data['active_skin'] = false;
		}
		
		// Tworzenie listy skórek
		if(file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/')) {
			$data['skins'] = array();
			$dir = opendir(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/');
			while(false !== ($file = readdir($dir))) {
				if(is_dir(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$file) && $file != '.' && $file != '..')  {
					$data['skins'][] = $file;
				}
			}
		}
		
		// Edycja skórki - sprawdzanie jaki szablon jest edytowany
		if(isset($data['setting_skin']['unero_skin'])) {
			$data['active_skin_edit'] = $data['setting_skin']['unero_skin'];
		} else {
			$data['active_skin_edit'] = 'default';
		}
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if(isset($_POST['button-edit']) || isset($_POST['button-delete'])){
				$data['active_skin_edit'] = $this->request->post['skin'];
			}
		}
		
		if(isset($this->request->post['save_skin']) && !isset($_POST['button-edit']) && !isset($_POST['button-delete'])) {
			$data['active_skin_edit'] = $this->request->post['save_skin'];
		}
		
		if(isset($_GET['skin_edit'])) {
			$data['active_skin_edit'] = $_GET['skin_edit'];
		}
			
		// Zmiana skórki
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if(isset($_POST['button-active'])){
				$save_unero_skin = array(
					'unero_skin' => $this->request->post['skin']
				);
				$this->model_setting_setting->editSetting('unero_skin', $save_unero_skin, $this->request->post['store_id']);	
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('extension/module/unero&submit=true', 'user_token=' . $this->session->data['user_token'], true));
            }
		}
		
		// Dodawanie skórki
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if(isset($_POST['add-skin'])){
				if(is_writable(DIR_CATALOG . 'view/theme/unero/skins/') && (is_writable(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/') || !file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'))) {
					// Sprawdzanie czy istnieje folder store_ 
					if(file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/') && filetype(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/') == 'dir') {
					} else {
						mkdir(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/', 0777);
					}
					
					// Dodawanie pliku z ustawieniami
					if($this->request->post['add-skin-name'] != '') {	
						if(!file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/')) {
							mkdir(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/', 0777);
							file_put_contents(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/settings.json', json_encode($config_data));
							mkdir(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/js/', 0777);
							file_put_contents(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/js/custom_code.js', ' ');
							mkdir(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/css/', 0777);
							file_put_contents(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$this->request->post['add-skin-name'].'/css/custom_code.css', ' ');
							$this->session->data['success'] = $this->language->get('text_success');
							$this->response->redirect($this->url->link('extension/module/unero&submit=true', 'user_token=' . $this->session->data['user_token'], true));
						}
					}  
				}

				$this->session->data['error_warning'] = 'You need to set CHMOD 777 for all folder and subfolder in catalog/view/theme/unero/skins!';
				$this->response->redirect($this->url->link('extension/module/unero&submit=true', 'user_token=' . $this->session->data['user_token'], true));
		    }
		}
		
		// Zapisywanie skórki
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if(isset($_POST['button-save'])){
				if(is_writable(DIR_CATALOG . 'view/theme/unero/skins') && is_writable(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store']) && is_writable(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'])) {
					// Sprawdzanie czy istnieje skórka
					if(file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/') && filetype(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/') == 'dir' && file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'')) {
						// Zapisywanie ustawien
						file_put_contents(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/settings.json', json_encode($this->request->post));  
						
						// Custom js
						file_put_contents(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/js/custom_code.js', html_entity_decode($this->request->post['custom_code_js']));  
						
						// Custom css
						file_put_contents(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/css/custom_code.css', html_entity_decode($this->request->post['custom_code_css']));  
						
						// Informacja o zapisaniu ustawien
						$this->session->data['success'] = $this->language->get('text_success');
						$this->response->redirect($this->url->link('extension/module/unero&submit=true&skin_edit=' . $data['active_skin_edit'] . '', 'user_token=' . $this->session->data['user_token'], true));
					}
				}
				
				// Jezeli nie istnieje katalog skórki to pojawia się komunikat o błedzie
				$this->session->data['error_warning'] = 'You need to set CHMOD 777 for all folder and subfolder in catalog/view/theme/unero/skins!';
				$this->response->redirect($this->url->link('extension/module/unero&submit=true', 'user_token=' . $this->session->data['user_token'], true));
			}
		}
		
		// Usuwanie skórki
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if(isset($_POST['button-delete'])){
				if(is_writable(DIR_CATALOG . 'view/theme/unero/skins')) {
					// Sprawdzanie czy istnieje skórka
					if(file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/') && filetype(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/') == 'dir' && file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'')) {
						// Sprawdzanie czy skórka jest ustawiona jako aktywna
						if($data['active_skin_edit'] != $data['active_skin']) {
							removeDir(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'');
							
							// Informacja o usunięciu skórki
							$this->session->data['success'] = $this->language->get('text_success');
							$this->response->redirect($this->url->link('extension/module/unero&submit=true', 'user_token=' . $this->session->data['user_token'], true));
						}
					}
				} else {
					$this->session->data['error_warning'] = 'You need to set CHMOD 777 for all folder and subfolder in catalog/view/theme/unero/skins!';
					$this->response->redirect($this->url->link('extension/module/unero&submit=true', 'user_token=' . $this->session->data['user_token'], true));
				}
				
				// Jezeli nie usunięto szablonu to pojawia sie błąd
				$this->session->data['error_warning'] = $this->language->get('text_warning2');
				$this->response->redirect($this->url->link('extension/module/unero&submit=true', 'user_token=' . $this->session->data['user_token'], true));
			}
		}
		
		// Pobieranie ustawień szablonu
		if(file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/settings.json')) {
			$template = json_decode(file_get_contents(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/settings.json'), true);
			if(isset($template)) {
				foreach ($template as $option => $value) { 
					if($option != 'store_id') {
						$data[$option] = $value;
					}
				}
			}
		}
				
		// Pobieranie ustawień szablon --> custom code js
		if(file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/js/custom_code.js')) {
			$data['custom_code_js'] = file_get_contents(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/js/custom_code.js');
		}
		
		// Pobieranie ustawień szablon --> custom code css
		if(file_exists(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/css/custom_code.css')) {
			$data['custom_code_css'] = file_get_contents(DIR_CATALOG . 'view/theme/unero/skins/store_'.$data['edit_skin_store'].'/'.$data['active_skin_edit'].'/css/custom_code.css');
		}
		
		$data['text_image_manager'] = 'Image manager';
		$data['user_token'] = $this->session->data['user_token'];		
		
		$text_strings = array('heading_title');
		
		foreach ($text_strings as $text) {
			$data[$text] = $this->language->get($text);
		}
		
		
		// Instalacja przykładowych danych
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {	
			// Custom Module
			if(isset($_POST['install_advanced_grid'])){
			     $output["select_demo"] = $this->request->post['select_demo'];
			     $this->model_setting_setting->editSetting( "select_demo", $output );	
			     
			     include '../data_sample/unero/' . $this->request->post['select_demo'] . '/advanced_grid.php'; 
			     
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('extension/module/unero', 'user_token=' . $this->session->data['user_token'], true));
			}
			
			// Breadcrumb_background_image
			if(isset($_POST['install_breadcrumb_background_image'])){
			     $output["select_demo"] = $this->request->post['select_demo'];
			     $this->model_setting_setting->editSetting( "select_demo", $output );	
			     
			     include '../data_sample/unero/' . $this->request->post['select_demo'] . '/breadcrumb_background_image.php'; 
			     
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('extension/module/unero', 'user_token=' . $this->session->data['user_token'], true));
			}
			
			// Blog Latest
			if(isset($_POST['install_blog_latest'])){
			     $output["select_demo"] = $this->request->post['select_demo'];
			     $this->model_setting_setting->editSetting( "select_demo", $output );	
			     
			     include '../data_sample/unero/' . $this->request->post['select_demo'] . '/blog_latest.php'; 
			     
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('extension/module/unero', 'user_token=' . $this->session->data['user_token'], true));
			}
			
			// Filter product
			if(isset($_POST['install_filter_product'])){
			     $output["select_demo"] = $this->request->post['select_demo'];
			     $this->model_setting_setting->editSetting( "select_demo", $output );	
			     
			     include '../data_sample/unero/' . $this->request->post['select_demo'] . '/filter_product.php'; 
			     
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('extension/module/unero', 'user_token=' . $this->session->data['user_token'], true));
			}

			// Custom Module
			if(isset($_POST['install_custom_module'])){
			     $output["select_demo"] = $this->request->post['select_demo'];
			     $this->model_setting_setting->editSetting( "select_demo", $output );	
			     
			     include '../data_sample/unero/' . $this->request->post['select_demo'] . '/custom_module.php'; 
			     
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('extension/module/unero', 'user_token=' . $this->session->data['user_token'], true));
			}
			
			// Megamenu
			if(isset($_POST['install_megamenu'])){
			     $output["select_demo"] = $this->request->post['select_demo'];
			     $this->model_setting_setting->editSetting( "select_demo", $output );	
			     
				include '../data_sample/unero/' . $this->request->post['select_demo'] . '/megamenu_query.php'; 
				
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('extension/module/unero', 'user_token=' . $this->session->data['user_token'], true));
			}
			
			// Blog
			if(isset($_POST['install_blog'])){
				$output["select_demo"] = $this->request->post['select_demo'];
				$this->model_setting_setting->editSetting( "select_demo", $output );	
				
				$this->load->model('blog/setup');
				$this->model_blog_setup->installSampleData();
			    
				$this->session->data['success'] = $this->language->get('text_success');
				$this->response->redirect($this->url->link('extension/module/unero', 'user_token=' . $this->session->data['user_token'], true));
			}
			
			// Faq
			if(isset($_POST['install_faq'])){
			     $output["select_demo"] = $this->request->post['select_demo'];
			     $this->model_setting_setting->editSetting( "select_demo", $output );	
			     
			     $language_id = 2;
			     foreach($data['languages'] as $language) {
			     	if($language['language_id'] != 1) {
			     		$language_id = $language['language_id'];
			     	}
			     }
			     
			     $output = array();
			     $output["faq_module"] = array (
			       'items' => 
			       array (
			         1 => 
			         array (
			           'question' => 
			           array (
			             1 => 'How long does delivery take?',
			             $language_id => 'How long does delivery take?',
			           ),
			           'answer' => 
			           array (
			             1 => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			             $language_id => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			           ),
			           'section_id' => '561fd603a03f3',
			           'order' => '1',
			         ),
			         2 => 
			         array (
			           'question' => 
			           array (
			             1 => 'How do I pay?',
			             $language_id => 'How do I pay?',
			           ),
			           'answer' => 
			           array (
			             1 => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			             $language_id => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			           ),
			           'section_id' => '561fd603a03f3',
			           'order' => '1',
			         ),
			         3 => 
			         array (
			           'question' => 
			           array (
			             1 => 'How much is the shipping?',
			             $language_id => 'How much is the shipping?',
			           ),
			           'answer' => 
			           array (
			             1 => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			             $language_id => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			           ),
			           'section_id' => '561fd603a03f3',
			           'order' => '2',
			         ),
			         4 => 
			         array (
			           'question' => 
			           array (
			             1 => 'When will I receive my refund?',
			             $language_id => 'When will I receive my refund?',
			           ),
			           'answer' => 
			           array (
			             1 => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			             $language_id => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			           ),
			           'section_id' => '561fd603a03f3',
			           'order' => '2',
			         ),
			         5 => 
			         array (
			           'question' => 
			           array (
			             1 => 'What is 3D secure',
			             $language_id => 'What is 3D secure',
			           ),
			           'answer' => 
			           array (
			             1 => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			             $language_id => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			           ),
			           'section_id' => '561fd603a0400',
			           'order' => '3',
			         ),
			         6 => 
			         array (
			           'question' => 
			           array (
			             1 => 'What countries do you ship to?',
			             $language_id => 'What countries do you ship to?',
			           ),
			           'answer' => 
			           array (
			             1 => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			             $language_id => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			           ),
			           'section_id' => '561fd603a0400',
			           'order' => '3',
			         ),
			         7 => 
			         array (
			           'question' => 
			           array (
			             1 => 'Can I return an item',
			             $language_id => 'Can I return an item',
			           ),
			           'answer' => 
			           array (
			             1 => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			             $language_id => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			           ),
			           'section_id' => '561fd603a0400',
			           'order' => '4',
			         ),
			         8 => 
			         array (
			           'question' => 
			           array (
			             1 => 'Why can I not pay by voice',
			             $language_id => 'Why can I not pay by voice',
			           ),
			           'answer' => 
			           array (
			             1 => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			             $language_id => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur enim ac rhoncus tempor. Suspendisse porta lorem vitae porttitor porta. Mauris massa tellus, finibus volutpat eros in, ultrices porttitor augue. Fusce aliquam tincidunt rhoncus. Cras non ultricies risus. Vivamus fermentum vulputate eros, eget efficitur tellus vehicula et. Integer at vehicula nisl, nec sodales neque. Nunc tincidunt posuere dui, et consectetur felis consequat elementum. Duis sodales urna non erat gravida, non pharetra dolor iaculis. Morbi imperdiet facilisis elementum. Nunc sagittis enim sapien, sit amet posuere magna facilisis vel. Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;br&gt;&lt;/p&gt;',
			           ),
			           'section_id' => '561fd603a0400',
			           'order' => '4',
			         ),
			       ),
			       'sections' => 
			       array (
			         1 => 
			         array (
			           'id' => '561fd603a03f3',
			           'title' => 
			           array (
			             1 => 'Payments',
			             $language_id => 'Payments',
			           ),
			           'hidden' => '1',
			           'order' => '1',
			         ),
			         2 => 
			         array (
			           'id' => '561fd603a0400',
			           'title' => 
			           array (
			             1 => 'Order &amp; Delivery',
			             $language_id => 'Order &amp; Delivery',
			           ),
			           'hidden' => '1',
			           'order' => '2',
			         ),
			       ),
			       'settings' => 
			       array (
			         'collapse' => '1',
			       ),
			     ); 
			     
			     $this->model_setting_setting->editSetting( "faq", $output );
			     
			     $this->session->data['success'] = $this->language->get('text_success');
			     $this->response->redirect($this->url->link('extension/module/unero', 'user_token=' . $this->session->data['user_token'], true));	
			}
		}
		
		// Pobieranie informacji, która wersja dema jest instalowana		
		$data['select_demos'] = $this->model_setting_setting->getSetting('select_demo');
		if(isset($data['select_demos']['select_demo'])) $data['select_demo'] = $data['select_demos']['select_demo'];

		
		//This creates an error message. The error['warning'] variable is set by the call to function validate() in this controller (below)
		if (isset($this->session->data['error_warning'])) {
			$data['error_warning'] = $this->session->data['error_warning'];
			unset($this->session->data['error_warning']);
 		} elseif(isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
        if (isset($this->session->data['success'])) {
        	$data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
			$data['success'] = '';
        }

		$data['action'] = $this->url->link('extension/module/unero', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true);
		
		// Multilanguage
		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		
		$data['breadcrumbs'] = array();
		
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		
		$data['breadcrumbs'][] = array(
			'text' => 'Modules',
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true)
		);
				
		$data['breadcrumbs'][] = array(
			'text' => 'unero Theme Options',
			'href' => $this->url->link('extension/module/unero', 'user_token=' . $this->session->data['user_token'], true)
		);
				
		// No image
		$this->load->model('tool/image');
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
				
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
				
		$this->response->setOutput($this->load->view('extension/module/unero', $data));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/unero')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (!$this->error) {
			return TRUE;
		} else {
			return FALSE;
		}	
	}
}
?>