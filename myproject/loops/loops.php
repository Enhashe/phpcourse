<?php
session_write_close();
print("<br>Task_1<br><br>");

for ($i=1; $i < 11; $i++) {
	print("Hello! #$i <br>");
}

print('<br>Task_2<br><br>');

$sum = 0;
for ($i=1; $i <= 112; $i + 3) {
	$sum = $sum + $i;
}
print ("Counter is: $i <br> Sum is: $sum<br>");

print('<br>Task_3<br><br>');

for ($i=1; $i < 10000; $i++) {
	if ($i % 5 == 0) {
		for ($j = 0; $j <= strlen($i); $j++) {
			if (substr($i, $j) == 3){
				echo "$i";
			}
		}
	}
}

print('<br>Task_4<br><br>');



print('<br>Task_5<br><br>');



print('<br>Task_6<br><br>');
?>