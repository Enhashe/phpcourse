<?php
function getClockTimestamp($timezone){
	$result = time() + $timezone * 3600;
	return $result;
}

$taskDescription = 'Выведите текущее время в формате timestamp';
$inputData = '$timezone = +7;';

$timezone = +7;

$result = getClockTimestamp($timezone);
