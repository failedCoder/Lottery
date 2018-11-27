<?php

$lastResult = $queryBuilder->fetchLastRowFromTable('izvuceno', 'on_date');

if ($lastResult) {

	$numbers = explode(',', $lastResult[0]->numbers);

	$bonusNumber = $lastResult[0]->bonus_number;

}

require_once "resurces/views/index.view.php";