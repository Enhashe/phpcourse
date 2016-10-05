<?php
print("<br>Task_1<br><br>");

for ($i=1; $i < 11; $i++) {
	print("Hello! #$i <br>");
}

print('<br>Task_2<br><br>');

$sum = 0;
for ($i=1; $i <=112; $i += 3) { 
	$sum = $sum + $i;
}
print ("Counter is: $i <br> Sum is: $sum<br>");

print('<br>Task_3<br><br>');

for ($i=1; $i <= 10000; $i++) {
	if ($i % 5 != 0) {
		for ($j = 0; $j < strlen($i); $j++) {
			if (substr($i, $j, 1) == 3) {
				echo "$i ";
			}
		}
	}
}

print('<br>Task_4<br><br>');

$number_quantity = 3;
$list = array();
for ($i=0; $i < $number_quantity; $i++) { 
	$number1 = rand(0,100);
	for ($j=0; $j < count($list); $j++) { 
		while ($number1 == $list[$j]) {
			$number1 = rand(0,100);
		}
	}
	$list[] = $number1;
}
var_dump($list);

print('<br>Task_5<br><br>');

$first = 35;
$last = 87;
for ($i=$first; $i <= $last ; $i++) { 
	if ($i % 7 == 1 && 2 && 5) {
		echo "$i<br>";
	}
}

print('<br>Task_6<br><br>');
$a = 100000;
$b = 999999;
$list_of_numbers = array();
for ($i=$a; $i <= $b; $i++) { 
	$number2 = "$i";
	if ($number2{0} + $number2{1} + $number2{2} === $number2{3} + $number2{4} + $number2{5}) {
		$list_of_numbers[] = $i;
	}
}
echo implode(" " , $list_of_numbers) . "<br>";
echo "Numbers quantity: " . count($list_of_numbers) . "<br>";
echo "Percent of LUCKY tickets: " . count($list_of_numbers) / ($b - $a) * 100;
?>