<?php

$taskDescription = 'Задача';
$inputData = '$counter = 10';
$result = '';

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'market';
$password = 'MarketPass';
$tablename1 = 'category';
$tablename2 = 'product';

$catNewValues1 = array('description' => 'Neck Jewelry');
$catCondition1 = array('title' => 'Neck');

$prodNewValues1 = array('description' => 'Please, don\'tleave empty');
$prodCondition1 = array('description' => 'Place for description', 'cat_id' => 13);

$dbConnection = dbConnect($dsn, $username, $password);
if ($dbConnection != NULL) {
	$result += updateRow($dbConnection, $tablename1, $catNewValues1, $catCondition1);
	$result += updateRow($dbConnection, $tablename2, $prodNewValues1, $prodCondition1);
} else $result = 'Cannot connect to MySQL';