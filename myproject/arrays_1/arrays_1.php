<?php
print("<br>Task_1<br><br>");

$n = 30;
$list1[] = 0;
for ($i=1; $i < $n; $i++) { 
	$list1[] = ($i % 2 != 0) ? 1 : 0;
}
echo implode(",", $list1) . "<br>";

print("<br>Task_2<br><br>");

$list2 = array();
$array_size2 = 10;
for ($i=0; $i < $array_size2; $i++) { 
	$list2[$i] = $i * $i;
}
var_dump($list2);

print("<br>Task_3<br><br>");

$list3 = array();
$array_size3 = 10;
for ($i=0; $i < $array_size3; $i++) { 
	$list3[$i] = $i * $i;
}
$list3_sum = 0;
foreach ($list3 as $key => $value) {
	$list3_sum = $list3_sum + $value;
}
var_dump($list3);
echo 'Standard array sum function result: ' . array_sum($list3) . '<br>';
echo 'Array sum counted by loop: ' . $list3_sum . '<br>';

print("<br>Task_4<br><br>");

$list4 = array('one','two','three','two','one','six','seven','three');
$list4_is_unique = false;
$list4_is_unique = (count($list4) == count(array_unique($list4))) ? true : false;
switch ($list4_is_unique) {
	case true:
		echo "All array elements is unique<br>";
		break;
	
	case false:
		echo "Array elements is NOT unique<br>";
		break;

	default:
		echo "Something strange happens<br>";
		break;
}

print("<br>Task_5<br><br>");

$list5 = [];
$list5_counter = 10;
$min = 0;
$max = 0;
for ($i=0; $i < $list5_counter; $i++) { 
	$list5[] = rand(0,100);
}
var_dump($list5);
for ($i=0; $i < $list5_counter; $i++) { 
	if ($list5[$i] > $list5[$max]) {
		$max = $i;
	} elseif ($list5[$i] < $list5[$min]) {
		$min = $i;
	}
}
$buffer = $list5[$min];
$list5[$min] = $list5[$max];
$list5[$max] = $buffer;
var_dump($list5);


print("<br>Task_6<br><br>");

$list6 = [];
$list6_counter = 10;
for ($i = 0; $i < $list6_counter; $i++) { 
	$list6[] = rand(0,100);
}
var_dump($list6);
asort($list6);
var_dump($list6);
ksort($list6);
for ($j = 0; $j < $list6_counter; $j++)	{
	$min = $j;
	for ($i = $j; $i < $list6_counter; $i++) { 
		if ($list6[$i] < $list6[$min]) {
			$min = $i;
		}
	}
	$buffer = $list6[$j];
	$list6[$j] = $list6[$min];
	$list6[$min] = $buffer;
}
var_dump($list6);

print("<br>Task_7<br><br>");

$list7 = [];
$list7_counter = 7;
$flag = 1;
/*for ($i = 0; $i < $list7_counter; $i++) { 
	$list7[] = rand(0,100);
}
var_dump($list7);*/
$list7 = array(1,2,3,4,5,6,1);
for ($i = 0; $i < $list7_counter; $i++) { 
	for ($j = 0; $j < ($list7_counter - 1); $j++) { 
		if ($i == $j) {
			continue;
		}
		if ($list7[$j] > $list7[($j + 1)]){
			$flag = 0;
			break;
		}
	}
	if ($flag == 1) {
		echo "Possible";
		break;
	} elseif ($flag == 0 && $i != ($list7_counter - 1)) {
		$flag = 1;
	}
}
if ($flag == 0) {
	echo "Impossible";
}