<?php

$userNumbers = new App\Model\UserNumbers($_POST, $queryBuilder);

//setting response to JSON
header('Content-type:application/json;charset=utf-8');

//verifying the input count
if (!$userNumbers->verify()) {
	
	$response = ['verificationFailed' => 'Niste unjeli potreban broj znakova!'];

	echo json_encode($response);

	exit;

}

//checking if results exist
$lastResult = $queryBuilder->fetchLastRowFromTable('izvuceno', 'on_date');

if (!$lastResult) {

	$response = ['noResults' => 'Potrebno je izvuci brojeve prije provjere.'];

	echo json_encode($response);

	exit;

}


$userNumbers->storeTo('odigrano');


if($userNumbers->areWinningNumbers()) {

	$response = ['winningNumbers' => "Odigrali ste dobitnu kombinaciju!"];

	echo json_encode($response);

	exit;

}

$response = ['notAwinningTicket' => 'Niste ostvarili dobitak!'];

echo json_encode($response);




