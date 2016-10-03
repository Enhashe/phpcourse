<?php
//some comments here
echo 'Hello World!!';
/*another one
in two lines*/
$text = '</br>some text here';
echo "$text</br>";

/*$list = array(1,2,3,4,5,6,7,8,9,0);
print_r($list);
echo "</br>";
echo implode(',', $list);
*/

/*$a = 1;
$b = 2;
$c = $a % $b;
var_export($c);
*/
$array_depth = 30;
for ($i=0; $i < $array_depth; $i++) {
	for ($j=0; $j < $array_depth; $j++) { 
		if ($i != $j) {
			$matrix[$i][$j] = 0;
		} else {
			$matrix[$i][$j] = 1;
		}
	}
}
foreach ($matrix as $value) {
	echo "<br>" . implode(' ', $value);
}