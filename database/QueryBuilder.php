<?php

namespace App\Database;


class QueryBuilder {

	private $db;


	public function __construct ($databaseConnection) {
	
		$this->db = $databaseConnection;
	
	}


	public function fetchAllFromTable ($table, $class = '') {
	
		$query = "SELECT * FROM $table";

		$statement = $this->db->prepare($query);

		$statement->execute();

		//optional parametar for mapping the results into a specific class
		if ($class) {

			return $statement->fetchAll(\PDO::FETCH_CLASS, $class);

		}

		return $statement->fetchAll(\PDO::FETCH_CLASS);
	
	}

	public function insertToTable ($table) {
	
		
	
	}
	
	
	

}