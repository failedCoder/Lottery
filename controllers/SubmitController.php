<?php

use App\Model\UserNumbers;
use App\Request\Request;
	
$userNumbers = new UserNumbers($_POST, $queryBuilder);

if (!$userNumbers->verify()) {
	
	Request::redirectTo('/');

}

$userNumbers->storeTo('odigrano');



die('after');