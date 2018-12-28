<?php

namespace App\Model;


class UserNumbers {

	private $numbers;

	private $query;

	private $totalLimit = 6;
	

	public function __construct($inputNumbers, $queryBuilder) {

		$this->numbers = $inputNumbers;

		$this->query = $queryBuilder;

	}


	private function getBonusNumber() {

		return array_pop($this->numbers);

	}


	public function storeTo($table) {
	
		$bonusNumber = $this->getBonusNumber();

		$numbers = implode(',', $this->numbers);

		$date = date('Y-m-d H:i:s');

		$this->query->insertNumbers($table, $numbers, $bonusNumber, $date);
	
	}


	public function verify() {
	
		if (count($this->numbers) === $this->totalLimit) {

			return true;
			
		}

		return false;
	
	}
	
	

}