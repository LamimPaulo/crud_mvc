<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/crud_mvc/");
	$config['dbname'] = 'crud_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'red';
	$config['dbpass'] = 'red';
} else {
	define("BASE_URL", "http://localhost/estoque/");
	$config['dbname'] = 'nova_loja';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'red';
	$config['dbpass'] = 'red';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
