<?php

function genRandomArray($counter = 1,$min = 0, $max = 1) {
	$randArray[] = rand($min,$max);
	for ($i = 1; $i < $counter; $i++) { 
		$randArray[$i] = rand($min,$max);
		for ($j = 0; $j <= ($i - 1); $j++) { 
			if ($randArray[$j] === $randArray[$i]) {
				$i--;
			}
		}
	}
	return $randArray;
}

function dbConnect($dsn, $username, $password){
	try {
		$db = new PDO($dsn, $username, $password);
	} catch (PDOException $exception) {
		return NULL;
	}
	return $db;
}

function makeQuery($dbConnect, $query){
	$statement = $dbConnect->query($query);
	$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
}

function insertRow($dbConnection, $tablename, $rowValues){
	$queryVal = [];
	$columns = '(' . implode(', ', array_keys($rowValues)) . ')';
	foreach ($rowValues as $key => $value) {
		$queryVal[$key] = ':' . $key;
	}
	$values = '(' . implode(', ', array_values($queryVal)) . ')';
	$statement = $dbConnection->prepare("INSERT INTO $tablename $columns VALUES $values");
	$statement->execute($rowValues);
	$count = $statement->rowCount();
	$result = ($count > 0) ? TRUE : FALSE;
	return $result;
}

function updateRow($dbConnection, $tablename, $newValues, $conditions){
	foreach ($newValues as $key => $value) {
		$newVaues[$key] = (is_string($value)) ? "$key='$value'" : "$key=$value";
	}
	foreach ($conditions as $key => $value) {
		$conditions[$key] = (is_string($value)) ? "$key='$value'" : "$key=$value";
	}
	$statementConditions = '(' . implode(' AND ', array_values($conditions)) . ')';
	$statementValues = '(' . implode(', ', $newVaues) . ')';
	$statement = $dbConnection->prepare("UPDATE $tablename SET $statementValues WHERE $statementConditions");
	var_dump($statement);
	$statement->execute();
	$count = $statement->rowCount();
	return $count;
}