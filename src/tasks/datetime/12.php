<?php
function getMonthDaysCount($date){
	return date('t', strtotime($date));
}

$taskDescription = 'Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен. Показать решение.';
$inputData = '$today = date(\'d.m.Y\', time());';

$today = date('d.m.Y', time());

$result = getMonthDaysCount($today);
