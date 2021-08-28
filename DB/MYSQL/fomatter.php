<?php 

// Class that converts an object into a list
class DbFormatter {
	private $db_list = [];

	public function getDbList() {
		return $this->db_list;
	}
	public function setDbList($db_list) {
		if(!is_array($db_list) && !is_string($db_list)) {
			throw new Exception("Error Processing Request");
		}
		$this->db_list[] = $db_list;
	}
}

 ?>