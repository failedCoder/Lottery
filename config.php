<?php

//config file with database access params

return [

	'database' => [

		'host' => 'localhost',

		'name' => 'lottery',

		'username' => 'root',

		'password' => 'Sejxohem24',

		'options' => [

			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

		]
	]
];