<?php
session_write_close();
print("<br>Task_1<br><br>");

for ($i=1; $i < 11; $i++) {
	print("Hello! #$i <br>");
}

print('<br>Task_2<br><br>');

/*$sum = 0;
for ($i=1; $i <= 112; $i + 3) {
	$sum = $sum + $i;
}
print ("Counter is: $i <br> Sum is: $sum<br>");
*/
print('<br>Task_3<br><br>');

/*for ($i=1; $i <= 10000; $i++) {
	if ($i % 5 != 0) {
		for ($j = 0; $j < strlen($i); $j++) {
			if (substr($i, $j, 1) == 3) {
				echo "$i<br>";
			}
		}
	}
}*/

print('<br>Task_4<br><br>');

$list = array();
$list_size = count($list);
/*for ($i=0; $i < 3; $i++) { 
	$list[$i] = rand(0,100);
}*/
/*for ($i= ; $i < 3; $i++) { 
	$number = rand(0,100);
	if ($number == $list[$i]) {
		$list[$i] = rand(0,100);
	}
}*/
$number = rand(0,100);
for ($i=0; $i < 3; $i++) { 
	$list[$i] = $number;
	while ($list[$i] == ) {
	# code...
	}
}

var_dump($list);

print('<br>Task_5<br><br>');



print('<br>Task_6<br><br>');
?>