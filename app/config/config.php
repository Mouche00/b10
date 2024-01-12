<?php

//
$config = parse_ini_file('config.ini');

// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', $config['DB_USER']);
define('DB_PASS', $config['DB_PASS']);
define('DB_NAME', 'carrefour');

// App Root 
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://localhost:8001');
//
define('SITENAME', 'Carrefour');
