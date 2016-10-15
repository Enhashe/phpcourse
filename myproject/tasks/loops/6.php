<?php 
function happyTicket($counter = 1) {
		$ticketMax = "$counter";
		$ticketLenght = strlen($ticketMax);
		$result = [];
		for ($i = 0; $i <= $ticketMax; $i++) { 
			$ticketCounter = NULL;
			$zeroCounter = $ticketLenght - strlen($i);
			for ($j = 0; $j < $zeroCounter; ++$j) { 
				$ticketCounter .= 0;
			}
			$ticketCounter .= $i;
			if ($ticketCounter[0] + $ticketCounter[1] + $ticketCounter[2] === $ticketCounter[3] + $ticketCounter[4] + $ticketCounter[5]) {
				$result[] = $ticketCounter;
			}
		}
	return $result;
}

$taskDescription = 'Вывести на экран все шестизначные счастливые билеты. Билет называется счастливым, если сумма первых трех цифр в номере билета равна сумме последних трех цифр. Найдите количество счастливых билетов и процент от общего числа билетов.';
$inputData = '$counter = 999999;';

$counter = 999999;
$numberQuantity = "Numbers quantity: " . count(happyTicket($counter));
$outputArray = implode(' ', happyTicket($counter));
$result = <<<EOD
$numberQuantity<br>
$outputArray
EOD;

?>
