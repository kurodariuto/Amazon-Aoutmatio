<?php 

// Generate a list of column names
class DbFormatter {
	private $db_list = [];

	public function getDbList() {
		return $this->db_list;
	}
	public function setDbList($db_lists, $column_name) {
		if(!is_array($db_lists) && !is_string($db_lists)) {
			throw new Exception("Error Processing Request");
		}
		foreach($db_lists as $db_columns) {
			$this->db_list[] = $db_columns[$column_name];
		}
	}
}

 ?>