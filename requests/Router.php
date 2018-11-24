<?php

namespace App\Request;

class Router {

	protected $routes = [

		"GET" => [],

		"POST" => []

	];


	public function get($uri, $controller) {

		$this->routes["GET"][$uri] = $controller;

	}


	public function post($uri, $controller) {

		$this->routes["POST"][$uri] = $controller;

	}


	public function directTo($uri, $method) {
	
		try {

			if (array_key_exists($uri, $this->routes[$method])) {

				return $this->routes[$method][$uri];

			}

			throw new \Exception("Route not found");

		} catch (\Exception $e) {

			die($e->getMessage());

		}
	
	}
	

}