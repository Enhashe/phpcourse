<?php

$taskDescription = 'Задача';
$inputData = '$counter = 10';
$dsn = 'mysql:host=localhost;dbname=market';
$username = 'market';
$password = 'MarketPass';
$tablename = 'product';
$query = <<<SQL
	SELECT *
	FROM $tablename
SQL;

$dbConnect = dbConnect($dsn, $username, $password);
$rows = makeQuery($dbConnect, $query);
$result = var_export($rows, TRUE);