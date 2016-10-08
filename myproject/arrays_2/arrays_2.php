<?php
print("<br>Task_1<br><br>");

$list1 = array(1,2,4,4,2,5);
$list1 = array_unique($list1);
var_dump($list1);

print("<br>Task_2<br><br>");

$list2 = [];
$list2_counter = 10;
for ($i = 0; $i < $list2_counter; $i++) { 
	$list2[] = rand(0,100);
}
var_dump($list2);
$new_list = array_fill(0, $list2_counter, null);
foreach ($list2 as $key => $value) {
	do {
		$a = rand(0,($list2_counter - 1));
		if ($new_list[$a] == null && $a != $key) {
			$new_list[$a] = $value;
			break;
		}
	} while (true);
}
var_dump($new_list);
shuffle($list2);
var_dump($list2);
print("<br>Task_3<br><br>");



print("<br>Task_4<br><br>");

$list4 = [];
$list4_counter = 10;
for ($i = 0; $i < $list4_counter; $i++) { 
	$list4[] = rand(-50,50);
}
foreach ($list4 as $key => $value) {
	$new_list4[] = $value;
	if ($value < 0 ) {
		$new_list4[] = 0;
	}
}
var_dump($list4);
var_dump($new_list4);

print("<br>Task_5<br><br>");
