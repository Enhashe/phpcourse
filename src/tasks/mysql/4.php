<?php 
function insertRow($dbConnection, $tablename, $rowValues){
	$queryVal = [];
	$columns = implode(', ', array_keys($rowValues));
	foreach ($rowValues as $key => $value) {
		$queryVal[$key] = ':' . $key;
	}
	$values = implode(', ', array_values($queryVal));
	$statement = $dbConnection->prepare("INSERT INTO $tablename($columns) VALUES($values)");
	$statement->execute($rowValues);
	$count = $statement->rowCount();
	$result = ($count > 0) ? TRUE : FALSE;
	return $result;
}

$taskDescription = 'Создать функцию, которая будет создавать запись в БД, используя PDO Mysql.';
$inputData = '$rowValues = array(\'title\' => \'Stormbringer\', \'description\' => \'Great Sword\', \'cat_id\' => 1, \'price\' => 12.50);';

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'market';
$password = 'MarketPass';
$tablename = 'product';

$rowValues = array('title' => 'Stormbringer', 'description' => 'Great Sword', 'cat_id' => 1, 'price' => 12.50);

$dbConnection = dbConnect($dsn, $username, $password);
$result = ($dbConnection != NULL) ? insertRow($dbConnection, $tablename, $rowValues) : 'Cannot connect to MySQL';
