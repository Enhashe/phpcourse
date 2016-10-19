<?php
function getTimeStamp($date){
	list($year, $month, $day) = explode('-', $date);
	$timestamp = mktime(0, 0, 0, $month, $day, $year);
	return $timestamp;
}

function getMonth($timestamp){
	$result = date('F', $timestamp);
	return $result;
}

$taskDescription = 'Сделайте форму, которая спрашивает дату в формате \'2025-12-31\'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату.';
$inputData = '$date = \'2025-12-31\';';

$date = '2025-12-31';

$result = getMonth(getTimeStamp($date));
