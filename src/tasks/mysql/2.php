<?php

$taskDescription = 'Задача';
$inputData = '$counter = 10';
/*$dsn = 'mysql:host=localhost;dbname=market';
$username = 'market';
$password = 'MarketPass';*/

$tablename = 'product';
$config = new Config(__DIR__ . '/../../../src/config/config.php');
var_dump($config->get('db'));
$dsn = $config->get('dsn');
$username = $config->get('username');
$password = $config->get('password');
$query = <<<SQL
	SELECT *
	FROM $tablename
SQL;

$dbConnect = dbConnect($dsn, $username, $password);
$rows = makeQuery($dbConnect, $query);
$result = var_export($rows, TRUE);