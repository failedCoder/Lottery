<?php

namespace App\Model;


class UserNumbers {

	private $numbers;

	private $query;

	private $totalLimit = 6;

	private $winLimit = 3;
	

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

	public function areWinningNumbers() {
	
		$lastResult = $this->query->fetchLastRowFromTable('izvuceno', 'on_date');

		$bonusInput = $this->getBonusNumber();

		$lastResultArr = explode(',', $lastResult[0]->numbers);

		$matches = count(

			array_intersect($this->numbers, $lastResultArr)
		
		);

		if ($bonusInput == $lastResult[0]->bonus_number) {
			$matches++;
		}

		return $matches >= $this->winLimit ? true : false;
	
	}
	
	
	
	

}