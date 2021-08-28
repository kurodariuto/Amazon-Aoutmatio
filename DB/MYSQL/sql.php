<?php 

require_once('config.php');

class MySql
{
	/*
	HACH：The logic using array index numbers is not very clean
	TODO：Make lgic that does not use index numbers
	*/

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

	/*
	   HACH：The logic using array index numbers is not very clean
	   TODO：Make lgic that does not use index numbers
	*/
	public function select_all() 
	{
		// XXX：Variable db_query and variable selct_data become null
	 	$db_query = mysqli_query($this->__construct(), 'SELECT * FROM' . ' ' . ConfingMysql::DBTABLE);
	 	$selct_data = mysqli_fetch_all($db_query, MYSQLI_ASSOC);
	 	return $selct_data;
	}
}

$mysql = new MYSQL();
var_dump($mysql->select_all());
 ?>