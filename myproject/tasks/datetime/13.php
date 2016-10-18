<?php

$taskDescription = 'Создайте массив месяцев $month. Выведите на экран название текущего месяца с помощью массива $month и функции date.';
$inputData = '$today = date(\'d.m.Y\', time());';

$today = date('d.m.Y', time());

$result = getMonth($today);
