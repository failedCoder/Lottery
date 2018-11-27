<?php

use App\Model\GenerateResult;

$generator = new GenerateResult($queryBuilder);

$generator->generateMainNumbers(5, 1, 46);

$generator->generateBonusNumber();

$generator->storeTo('izvuceno');

die('done');