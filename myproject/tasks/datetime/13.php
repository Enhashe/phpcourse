<?php
function getLeapYear($year){
	$isLeap = date('L', mktime(0, 0, 0, 1, 1, $year));
	$isLeap = ($isLeap == 1) ? 'високосный' : 'не високосный';
	return $isLeap;
}

$taskDescription = 'Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяетвисокосный ли год.';
$inputData = '$year1 = time();<br>$year2 = 2015;<br>$year3 = rand(1970, 2038);';

$year1 = time() / 31556926 % 365.24 + 1970;
$year2 = '2015';
$year3 = rand(1970, 2038);

$result1 = getLeapYear($year1);
$result2 = getLeapYear($year2);
$result3 = getLeapYear($year3);

$result = <<<EOT
$year1 год: $result1<br>
$year2 год: $result2<br>
$year3 год: $result3<br>
EOT;
