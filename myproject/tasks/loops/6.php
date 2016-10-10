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
$counter = 999999;
$result = happyTicket($counter);

?>

<?php require '../../view/header.php'; ?>
<div class="content">
	<?php require '../../view/menu.php'; ?>
		<div class="workarea">
			<div><h1>Loops</h1></div>
			<div class="task-item">
				Task:<br>
				...
			</div>
			<div class="task-item">
				Input Data:<br>
				...
			</div>
			<div class="task-item">
				Output Data:<br>
				<?php 
					echo "Numbers quantity: " . count($result) . "<br>";
					echo implode("\t" , $result) 
				?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
