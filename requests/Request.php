<?php

namespace App\Request;

class Request {

	
	public static function getUri() {

		return trim($_SERVER["REQUEST_URI"],'/');

	}


	public static function getMethod() {

		return $_SERVER["REQUEST_METHOD"];

	}
	

	public static function redirectTo($uri) {
		
			header("location: $uri");

	}

}