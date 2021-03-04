<?php
class ControllerInformationDistributors extends Controller {
	private $error = array();
	public function index() {
		$this->load->language('information/distributors');

		$this->load->model('catalog/distributors');

		// $this->load->model('catalog/product');

		$this->load->model('tool/image');

		if (isset($this->request->get['search'])) {
			$search = $this->request->get['search'];
		} else {
			$search = '';
		}


		if (isset($this->request->get['distribution_location_id'])) {
			$distribution_location_id = $this->request->get['distribution_location_id'];
		} else {
			$distribution_location_id = 0;
		}

	/* 	if (isset($this->request->get['sub_category'])) {
			$sub_category = $this->request->get['sub_category'];
		} else {
			$sub_category = '';
		} */

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'p.sort_order';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}

		if (isset($this->request->get['search'])) {
			$this->document->setTitle($this->language->get('heading_title') .  ' - ' . $this->request->get['search']);
		} elseif (isset($this->request->get['tag'])) {
			$this->document->setTitle($this->language->get('heading_title') .  ' - ' . $this->language->get('heading_tag') . $this->request->get['tag']);
		} else {
			$this->document->setTitle($this->language->get('heading_title'));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$url = '';

			if (isset($this->request->get['distribution_location_id'])) {
			$url .= '&distribution_location_id =' . $this->request->get['distribution_location_id'];
		}

	/* 	if (isset($this->request->get['sub_category'])) {
			$url .= '&sub_category=' . $this->request->get['sub_category'];
		} */

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('information/distributors', $url)
		);

		if (isset($this->request->get['search'])) {
			$data['heading_title'] = $this->language->get('heading_title') .  ' - ' . $this->request->get['search'];
		} else {
			$data['heading_title'] = $this->language->get('heading_title');
		}

		$this->load->model('catalog/distributors');

		// 3 Level Category Search
		$data['finders'] = array();
		$this->load->model('tool/image');
		
		$data['locations'] = array();

		$locations_tmp = $this->model_catalog_distributors->getLocations();

		$finders = $this->model_catalog_distributors->getFinders($distribution_location_id);
		$finder_count = $this->model_catalog_distributors->getTotalFinders($distribution_location_id);
			// return;
		foreach ($finders as $finder) {
			if (is_file(DIR_IMAGE . $finder['profile_image'])) {
				$image = $this->model_tool_image->resize($finder['profile_image'], 100, 100);
			} else {
				$image = $this->model_tool_image->resize('no_image.png', 100, 100);
			}
			$data['finders'][] = array(
				'distribution_location_id' => $finder['distribution_location_id'],
				'distributor_id' => $finder['distributor_id'],
				'profile_image'      => $image,
				'name'            => $finder['name'],
				'location_name'            => $finder['location_name'],
				'level'            => $finder['level'],
				'phone'            => $finder['phone'],
				'sort_order'      => $finder['sort_order'],
			);
			/* $data['locations'][] = array(
				'location_id' => $finder['distribution_location_id'],
				'location_name' => $finder['location_name']
			); */
		}
		$data['locations'] = $locations_tmp;
		//  return;
		$data['search'] = $search;
		$data['distribution_location_id'] = $distribution_location_id;
		// $data['sub_category'] = $sub_category;
		$data['finder_count'] = $finder_count;

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['limit'] = $limit;

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/distributors', $data));
	}
}
