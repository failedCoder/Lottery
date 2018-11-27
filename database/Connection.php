<?php

namespace App\Database;


class Connection {

	private static $instance;

	public static function make($config){

		try {

			if(self::$instance === NULL) {
		
					self::$instance = 
						new \PDO ("mysql:host=" . $config['host'] . ";
						dbname=" . $config['name'],$config['username'],$config['password'],$config['options']
					);
		
			}
		
			return self::$instance;

		} catch (\PDOException $e) {

			die("Database connection error: " . $e->getMessage());

		}

	}

}