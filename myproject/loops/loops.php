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

for ($i=0; $i <= 10000; $i++) {
	if ($i % 5 != 0) {
		for ($j = 0; $j < strlen($i); $j++) {
			$k = "$i";
			if ($k{$j} == 3) {
				echo "$k\t";
			}
		}
	}
}

print('<br>Task_4<br><br>');

$number_quantity = 3;
$list[] = rand(0,100);
for ($i=1; $i < $number_quantity; $i++) { 
	$list[$i] = rand(0,100);
	for ($j=0; $j <= ($i- 1); $j++) { 
		if ($list[$j] === $list[$i]) {
			$i--;
		}
	}
}
var_dump($list);

print('<br>Task_5<br><br>');

$first = 35;
$last = 87;
for ($i=$first; $i <= $last ; $i++) { 
	if ($i % 7 == 1 && 2 && 5) {
		echo "$i\t";
	}
}

print('<br>Task_6<br><br>');

$ticket_max = '999999';
$ticket_lenght = strlen($ticket_max);
$list_of_numbers = [];
for ($i=0; $i <= $ticket_max; $i++) { 
	$ticket_counter = NULL;
	$zero_counter = $ticket_lenght - strlen($i);
	for ($j=0; $j < $zero_counter; ++$j) { 
		$ticket_counter .= 0;
	}
	$ticket_counter .= $i;
	if ($ticket_counter[0] + $ticket_counter[1] + $ticket_counter[2] === $ticket_counter[3] + $ticket_counter[4] + $ticket_counter[5]) {
		$list_of_numbers[] = $ticket_counter;
	}
}
echo implode("\t" , $list_of_numbers) . "<br>";
echo "Numbers quantity: " . count($list_of_numbers) . "<br>";
echo "Percent of LUCKY tickets: " . count($list_of_numbers) / $ticket_max * 100;
?>