<?php
class ModelCatalogDistributorLocation extends Model {
	public function addLocation($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "distributor_location SET location_name = '" . $this->db->escape($data['location_name']) . "', sort_order = '" . (int)$data['sort_order'] . "'");

		$location_id = $this->db->getLastId();

		$this->cache->delete('distributor_location');

		return $location_id;
	}

	public function editLocation($location_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "distributor_location SET location_name = '" . $this->db->escape($data['location_name']) . "', sort_order = '" . (int)$data['sort_order'] . "' WHERE location_id = '" . (int)$location_id . "'");

		$this->cache->delete('distributor_location');
	}

	public function deleteLocation($location_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "distributor_location` WHERE location_id = '" . (int)$location_id . "'");
		
		$this->cache->delete('distributor_location');
	}

	public function getLocation($location_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "distributor_location WHERE location_id = '" . (int)$location_id . "'");

		return $query->row;
	}

	public function getLocations($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "distributor_location";

		if (!empty($data['filter_name'])) {
			$sql .= " WHERE location_name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sort_data = array(
			'location_name',
			'sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY location_name";
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

	
	
	public function getTotalLocations() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "distributor_location");

		return $query->row['total'];
	}
}
