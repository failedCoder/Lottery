<?php

$inputNumbers = $_POST;

if (count($inputNumbers) !== 6) {
	header('location: /');
}

$bonusNum = array_pop($inputNumbers);

$mainNumbers = implode(',', $inputNumbers);

