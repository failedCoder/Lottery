<?php

session_start();

$lastResult = $queryBuilder->fetchLastRowFromTable('izvuceno', 'on_date');

if ($lastResult) {

	$numbers = explode(',', $lastResult[0]->numbers);

	$bonusNumber = $lastResult[0]->bonus_number;

}

if($_SESSION['numbers']){

	$numbersInput = $_SESSION['numbers'];

	$bonusInput = array_pop($numbersInput);

	$lastResultArr = explode(',', $lastResult[0]->numbers);
	$common = array_intersect($numbersInput, $lastResultArr);

	$commonCount = count($common);

	if ($bonusInput == $lastResult[0]->bonus_number) {
		$commonCount++;
	}

	$winningTicket = $commonCount >= 3 ? true : false;
}

require_once "resurces/views/index.view.php";