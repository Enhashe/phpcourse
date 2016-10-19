<?php
function getClockTimestamp($timezone){
	return time() + $timezone * 3600;
}

$taskDescription = 'Выведите текущее время в формате timestamp';
$inputData = '$timezone = +7;';

$timezone = +7;

$result = getClockTimestamp($timezone);
