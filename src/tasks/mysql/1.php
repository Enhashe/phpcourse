<?php

function dbConnect($dbHostname, $dbUsername, $dbPassword, $database){
	$mysqli = new mysqli($dbHostname, $dbUsername, $dbPassword, $database);
	if (mysqli_connect_errno($mysqli)) {
		echo 'Failed to connect to MySQL:' . mysqli_connect_error();
	}
	return $mysqli;
}

function printTable($mysqli, $tablename){
	$sql = <<<SQL
	SELECT *
	FROM $tablename
SQL;
	$rows = [];
	$res = $mysqli->query($sql);
	while ($row = $res->fetch_assoc()) {
		$rows[] = var_export($row, true);
	}
	return $rows;
}

$taskDescription = 'Подклю';
$inputData = '$counter = 10';

$dbHostname = 'localhost';
$dbUsername = 'market';
$dbPassword = 'MarketPass';
$database = 'market';
$tablename = 'product';

$mysqli = dbConnect($dbHostname, $dbUsername, $dbPassword, $database);
$result = implode('<br>', printTable($mysqli, $tablename));