<?php 

require '../../lib/functions.php';

function arrayWithZero($inputArray) {
	foreach ($inputArray as $key => $value) {
		$result[] = $value;
		if ($value < 0 ) {
			$result[] = 0;
		}
	}
	return $result;
}

$inputArray = genRandomArray(10, -50, 50);
$outputArray = arrayWithZero($inputArray);

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
				<?php echo implode(',', $outputArray) ?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
