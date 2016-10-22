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
