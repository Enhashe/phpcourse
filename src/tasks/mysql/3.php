<?php 

$taskDescription = 'Задача';
$inputData = '$counter = 10';
$result = '';
$dsn = 'mysql:host=localhost;dbname=market';
$username = 'market';
$password = 'MarketPass';
$tablename1 = 'product';
$tablename2 = 'category';
$query = <<<SQL
	SELECT product.title, category.title, product.price
		FROM product, category
		WHERE price >50
		AND product.cat_id = category.id
SQL;
$dbConnect = dbConnect($dsn, $username, $password);
$rows = ($dbConnect != NULL) ? makeQuery($dbConnect, $query) : 'Cannot connect to MySQL';
$result = var_export($rows, TRUE);