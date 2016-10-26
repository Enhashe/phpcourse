<?php 
/*function updateRow($dbConnection, $tablename, $newValues, $conditions){
	foreach ($newValues as $key => $value) {
		$newVaues[$key] = (is_string($value)) ? "$key='$value'" : "$key=$value";
	}
	foreach ($conditions as $key => $value) {
		$conditions[$key] = (is_string($value)) ? "$key='$value'" : "$key=$value";
	}
	$statementConditions = '(' . implode(' AND ', array_values($conditions)) . ')';
	$statementValues = '(' . implode(', ', $newVaues) . ')';
	$statement = $dbConnection->prepare("UPDATE $tablename SET $statementValues WHERE $statementConditions");
	$statement->execute();
	$count = $statement->rowCount();
	return $count;
}*/

$taskDescription = 'По аналогии с задачей 1 создать функцию обновления записи в БД.';
$inputData = '$newValues = array(\'title\' => \'Stormbringer\', \'description\' => \'Great Sword\', \'cat_id\' => 1, \'price\' => 12.50);
$conditions = array(\'title\' => \'Shiny Bucket\', \'cat_id\' => 4);';

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'market';
$password = 'MarketPass';
$tablename = 'product';

$newValues = array('title' => 'Stormbringer', 'description' => 'Great Sword', 'cat_id' => 1, 'price' => 12.50);
$conditions = array('title' => 'Shiny Bucket', 'cat_id' => 4);

$dbConnection = dbConnect($dsn, $username, $password);
$result = ($dbConnection != NULL) ? updateRow($dbConnection, $tablename, $newValues, $conditions) : 'Cannot connect to MySQL';
