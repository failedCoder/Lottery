<?php

//app entry point

require_once "bootstrap.php";


$test = new Request\Router();

echo $test->test;