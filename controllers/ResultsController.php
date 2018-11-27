<?php

use App\Model\GenerateResult;

$results = (new GenerateResult($queryBuilder))->fetchAllResults('izvuceno', 'on_date', 'desc');

require_once "resurces/views/results.view.php";