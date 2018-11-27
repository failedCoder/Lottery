<?php

namespace App\Database;


class QueryBuilder {

	private $db;


	public function __construct ($databaseConnection) {
	
		$this->db = $databaseConnection;
	
	}


	public function fetchAllFromTable ($table, $class = '', $field = 'id', $order = 'asc') {
	
		$query = "SELECT * FROM $table ORDER BY $field $order";

		$statement = $this->db->prepare($query);

		$statement->execute();

		//optional parametar for mapping the results into a specific class
		if ($class) {

			return $statement->fetchAll(\PDO::FETCH_CLASS, $class);

		}

		return $statement->fetchAll(\PDO::FETCH_CLASS);
	
	}

	public function insertNumbers ($table, $numbers, $bonusNumber, $date) {
		
		try {
			
			$query = "INSERT INTO $table (numbers, bonus_number, on_date) VALUES (?, ?, ?)";

			$statement = $this->db->prepare($query);

			$statement->bindParam(1, $numbers);

			$statement->bindParam(2, $bonusNumber);

			$statement->bindParam(3, $date);

			$statement->execute();


		} catch (\PDOException $e) {
			
			die($e->getMessage());

		}
		
	
	}
	
	
	

}