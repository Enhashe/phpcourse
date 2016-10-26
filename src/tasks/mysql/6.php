<?php

$taskDescription = 'Задача';
$inputData = '$counter = 10';
$result = '';

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'market';
$password = 'MarketPass';
$tablename1 = 'category';
$tablename2 = 'product';


$catValues = [
	[
		'title' => 'Shoulder',
		'description' => 'Shoulder armor'
	],
	[
		'title' => 'Neck',
		'description' => 'Neck armor'
	],
	[
		'title' => 'Tabard',
		'description' => 'Short heraldic coat'
	],
	[
		'title' => 'Wrist',
		'description' => 'Wrist armor'
	],
	[
		'title' => 'Gauntlets',
		'description' => 'Gauntlets armor'
	],
	[
		'title' => 'Waist',
		'description' => 'Waist armor'
	],
	[
		'title' => 'Feet',
		'description' => 'Feet armor'
	],
	[
		'title' => 'Ring',
		'description' => 'Ring jewelry'
	],
	[
		'title' => 'Earring',
		'description' => 'Earring jewelry'
	]
];

$prodValues = array(
	array(
		'title' => 'Soulrapier',
		'description' => 'Place for description',
		'cat_id' => 1,
		'price' => 33
	),
	array(
		'title' => 'Bracer of Diamond Blast',
		'description' => 'Place for description',
		'cat_id' => 9,
		'price' => 7.20
	),
	array(
		'title' => 'Wanderers\' Boots',
		'description' => 'Place for description',
		'cat_id' => 12,
		'price' => 8.35
	),
	array(
		'title' => 'Wolves\' Waist',
		'description' => 'Place for description',
		'cat_id' => 11,
		'price' => 4.15
	),
	array(
		'title' => 'Goblin\'s Necklace',
		'description' => 'Place for description',
		'cat_id' => 7,
		'price' => 48.12
	),
	array(
		'title' => 'Tabard of the Lord',
		'description' => 'Place for description',
		'cat_id' => 8,
		'price' => 22.05
	),
	array(
		'title' => 'Imperial Fiery Pauldron',
		'description' => 'Place for description',
		'cat_id' => 6,
		'price' => 27
	),
	array(
		'title' => 'Gauntlets of Good Auras',
		'description' => 'Place for description',
		'cat_id' => 10,
		'price' => 15.73
	),
	array(
		'title' => 'Ring of Diamond Chains',
		'description' => 'Place for description',
		'cat_id' => 13,
		'price' => 48.82
	),
	array(
		'title' => 'Ring of Etherealness Control',
		'description' => 'Place for description',
		'cat_id' => 13,
		'price' => 55.16
	)
);

$dbConnection = dbConnect($dsn, $username, $password);
if ($dbConnection != NULL) {
	foreach ($catValues as $key => $value) {
		$result += insertRow($dbConnection, $tablename1, $catValues[$key]);
	}
	foreach ($prodValues as $key => $value) {
		$result += insertRow($dbConnection, $tablename2, $prodValues[$key]);
	}
} else $result = 'Cannot connect to MySQL';
