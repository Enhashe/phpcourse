<?php
function getMonthDaysCount($date){
	$result = date('t', strtotime($date));
	return $result;
}

$taskDescription = 'Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен. Показать решение.';
$inputData = '$today = date(\'d.m.Y\', time());';

$today = date('d.m.Y', time());

$result = getMonthDaysCount($today);
