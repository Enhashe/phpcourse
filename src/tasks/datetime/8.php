<?php
function getDesiredDate($month, $day, $year){
	$result = date('d.m.Y', mktime(0, 0, 0, $month, $day, $year));
	return $result;
}

$taskDescription = 'С помощью функций mktime и date выведите 13 февраля 2015 года в формате \'31.12.2025\'.';
$inputData = '$timezone = +7;';

$month = 2;
$day = 13;
$year = 2015;

$result = getDesiredDate($month, $day, $year);
