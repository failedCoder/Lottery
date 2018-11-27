<?php

//place for defining routes

$router->get("", "controllers/IndexController.php");

$router->post("submit", "controllers/SubmitController.php");

$router->post("generate","controllers/GenerateResultsController.php");

