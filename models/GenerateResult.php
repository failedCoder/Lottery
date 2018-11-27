<?php

namespace App\Model;


class GenerateResult {

	private $query;

	private $mainNumbers = [];

	private $bonusNumber;	


	public function __construct($queryBuilder) {
	
		$this->query = $queryBuilder;
	
	}
	


	public function generateMainNumbers($counter, $from, $to) {

		while (count($this->mainNumbers) < $counter) {
			
			$generatedNumber = $this->generateNumber($from, $to);

			if (!in_array($generatedNumber, $this->mainNumbers)) {

				$this->mainNumbers[] = $generatedNumber;

			}

		}

		return $this->mainNumbers;

	}

	public function generateBonusNumber() {

		$this->bonusNumber = $this->generateNumber(1, 9);

	}


	private function generateNumber($from, $to) {

		return rand($from, $to);

	}

	public function storeTo($table) {
	
		$bonusNumber = $this->bonusNumber;

		sort($this->mainNumbers);

		$numbers = implode(',', $this->mainNumbers);

		$date = date('Y-m-d H:i:s');

		$this->query->insertNumbers($table, $numbers, $bonusNumber, $date);
	
	}

	public function fetchAllResults($table, $field = 'id', $order = 'asc') {

		return $this->query->fetchAllFromTable($table, '', $field, $order);

	}
	

}