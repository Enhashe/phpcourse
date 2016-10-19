<?php
function getTimeStamp($date){
	list($day, $month, $year) = explode('.', $date);
	$timestamp = mktime(0, 0, 0, $month, $day, $year);
	return $timestamp;
}

function getWeekDay($timestamp){
	return date('l', $timestamp);
}

$taskDescription = 'Сделайте форму, которая спрашивает дату в формате \'31.12.2025\'. С помощью функций mktime иexplode переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату.';
$inputData = '$date = \'31.12.2025\';';

$date = '31.12.2025';

$result = getWeekDay(getTimeStamp($date));
