<?php
function getFutureTimestamp($month, $day, $year){
	$result = mktime(0, 0, 0,$month, $day, $year); 
	return $result;
}

$taskDescription = 'Выведите 1 марта 2025 года в формате timestamp';
$inputData = '$month = 3;<br>$day = 1;<br>$year = 2025;';

$month = 3;
$day = 1;
$year = 2025;

$result = getFutureTimestamp($month, $day, $year);
