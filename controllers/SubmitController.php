<?php

session_start();

use App\Model\UserNumbers;
use App\Request\Request;
	
$userNumbers = new UserNumbers($_POST, $queryBuilder);

$_SESSION['numbers'] = $_POST;

if (!$userNumbers->verify()) {
	
	$_SESSION['inputError'] = true;

	Request::redirectTo('/');
	exit();
}


$lastResult = $queryBuilder->fetchLastRowFromTable('izvuceno', 'on_date');

if (!$lastResult) {

	$_SESSION['noResults'] = true;

	Request::redirectTo('/');
	exit();

}

$userNumbers->storeTo('odigrano');

$_SESSION['inputError'] = false;

Request::redirectTo('/');