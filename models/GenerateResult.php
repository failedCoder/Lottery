<?php

namespace App\Model;


class GenerateResult {

	private $mainNumbers = [];

	private $bonusNumber;	


	public function generateMainNumbers($counter, $from, $to) {

		while (count($this->mainNumbers) < $counter) {
			
			$generatedNumber = $this->generateNumber($from, $to);

			if (!in_array($generatedNumber, $this->mainNumbers)) {

				$this->mainNumbers[] = $generatedNumber;

			}

		}

		return $this->mainNumbers;

	}


	public function generateNumber($from, $to) {

		return rand($from, $to);

	}

}