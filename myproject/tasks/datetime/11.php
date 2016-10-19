<?php
function getDay($date){
	return date('d',strtotime($date));
}

$taskDescription = 'Найдите номер текущего дня от начала месяца.';
$inputData = '$today = date(\'d.m.Y\', time());';

$today = date('d.m.Y', time());

$result = getDay($today);
