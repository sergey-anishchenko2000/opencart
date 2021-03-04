<?php
class ModelCatalogDistributors extends Model {
	public function addFinder($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "distributor SET distribution_location_id = '" . (int)$data['location_id'] . "', name = '" . $this->db->escape($data['name']) . "', level = '" . $this->db->escape($data['level']) . "', phone = '" . $this->db->escape($data['phone']) . "', sort_order = '" . (int)$data['sort_order'] . "'");

		$distributor_id = $this->db->getLastId();

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "distributor SET profile_image = '" . $this->db->escape($data['image']) . "' WHERE distributor_id = '" . (int)$distributor_id . "'");
		}
		$this->cache->delete('distributor');

		return $distributor_id;
	}

	public function editFinder($distributor_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "distributor SET distribution_location_id = '" . (int)$data['location_id'] . "', name = '" . $this->db->escape($data['name']) . "', level = '" . $this->db->escape($data['level']) . "', phone = '" . $this->db->escape($data['phone']) . "', sort_order = '" . (int)$data['sort_order'] . "' WHERE distributor_id = '" . (int)$distributor_id . "'");
		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "distributor SET profile_image = '" . $this->db->escape($data['image']) . "' WHERE distributor_id = '" . (int)$distributor_id . "'");
		}
		$this->cache->delete('distributor');
	}

	public function deleteFinder($distributor_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "distributor` WHERE distributor_id = '" . (int)$distributor_id . "'");
		
		$this->cache->delete('distributor');
	}

	public function getFinder($distributor_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "distributor WHERE distributor_id = '" . (int)$distributor_id . "'");

		return $query->row;
	}

	public function getFinders($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "distributor";

		if (!empty($data['filter_name'])) {
			$sql .= " WHERE name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sort_data = array(
			'name',
			'sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	
	
	public function getTotalFinders() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "distributor");

		return $query->row['total'];
	}
}
