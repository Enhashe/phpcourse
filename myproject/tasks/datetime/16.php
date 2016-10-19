<?php
function getTimeStamp($datetime){
	list($date, $time) = explode('T', $datetime);
	list($year, $month, $day) = explode('-', $date);
	list($hour, $minutes, $seconds) = explode(':', $time);
	$timestamp = mktime($hour, $minutes, $seconds, $month, $day, $year);
	return $timestamp;
}

function getMonth($timestamp){
	return date('F', $timestamp);
}

$taskDescription = 'Сделайте форму, которая спрашивает у пользователя дату в формате \'2025-12-31T12:59:59\'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату. ';
$inputData = '$datetime = \'2025-12-31T12:59:59\';';

$datetime = '2025-12-31T12:59:59';

$result = getMonth(getTimeStamp($datetime));
