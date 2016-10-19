<?php

$taskDescription = 'Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом будет 1 2 4 5';
$inputData = '$list1 = array(1,2,4,4,2,5);';

$list1 = array(1,2,4,4,2,5);
$list1 = array_unique($list1);
$result = 'Modified array: ' . implode(',', $list1);
