<?php

use App\Model\GenerateResult;
use App\Request\Request;

$generator = new GenerateResult($queryBuilder);

$generator->generateMainNumbers(5, 1, 46);

$generator->generateBonusNumber();

$generator->storeTo('izvuceno');

Request::redirectTo('/');