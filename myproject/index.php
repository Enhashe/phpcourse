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
$array_dimension = 30;
for ($i=0; $i < $array_dimension; $i++) {
	for ($j=0; $j < $array_dimension; $j++) {
		if ($i != $j) {
			$matrix[$i][$j] = 0;
		} else {
			$matrix[$i][$j] = 1;
		}
	}
}
foreach ($matrix as $value) {
	echo implode(' ', $value) . "<br>";
}

$test = 123321;
$a=36;
$b=7;
$c=$a%$b;
echo "$c";