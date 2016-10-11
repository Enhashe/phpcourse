<?php 
function multiplicatedArray($inputArray, $mult) {
	if ($mult < 0 ) {
		return 0;
	} else {
		foreach ($inputArray as $key => $value) {
			$inputArray[$key] = $value * $mult;
		}
		return $inputArray;
	}
}

$inputArray = array(2,3.45,1.15,6,8,10.2);
$result = multiplicatedArray($inputArray, 2);

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
				echo implode(',', $inputArray) . '<br>';
				if ($result == 0) {
					echo "Wrong miltiplier";
				} else {
					echo implode(',', $result);
				}

				?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
