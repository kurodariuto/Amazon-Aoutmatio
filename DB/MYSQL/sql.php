<?php 

require_once('config.php');

class MySql
{
	// After generating the instas, you can connect to MySQL
	function __construct() 
	{
		$db_link = mysqli_connect (
			ConfingMysql::DBHOST, 
			ConfingMysql::DBUSER,
			ConfingMysql::DBPASS,
			ConfingMysql::DBNAME
		);
		return $db_link;
	}
	public function select_all() 
	{
	 	$db_query = mysqli_query($this->__construct(), 'SELECT * FROM' . ' ' . ConfingMysql::DBTABLE);
	 	$selct_data = mysqli_fetch_all($db_query, MYSQLI_ASSOC);
	 	return $selct_data;
	}
}
 ?>