<?php

$userNumbers = new App\Model\UserNumbers($_POST, $queryBuilder);

$response = ['success' => 'Brojevi uspješno odigrani!'];


if (!$userNumbers->verify()) {
	
	$response = ['verificationFailed' => 'Niste unjeli potreban broj znakova!'];

}

//checking if results exist
if (!$queryBuilder->fetchLastRowFromTable('izvuceno', 'on_date')) {

	$response = ['noResults' => 'Potrebno je izvuci brojeve prije provjere.'];

}

if ($response['success']) {

	$userNumbers->storeTo('odigrano');

}

//setting response to JSON
header('Content-type:application/json;charset=utf-8');

//returning JSON response
echo json_encode($response);

