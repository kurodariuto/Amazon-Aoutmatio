<?php 
// This is sql operation class

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
$db_link = mysqli_connect(ConfigRegistry::DBHOST, ConfigRegistry::DBUSER, ConfigRegistry::DBPASS, ConfigRegistry::DBNAME);
$db_query = mysqli_query($db_link, 'SELECT * FROM' . ' ' .ConfigRegistry::DBTABLE);
$db_data = mysqli_fetch_all($db_query, MYSQLI_ASSOC);

 ?>