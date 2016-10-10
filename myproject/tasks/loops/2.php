<?php 
function sumOfnumbers($counter = 1) {
	$sum = 0;
	for ($i = 1; $i <= $counter; $i += 3) { 
	$sum = $sum + $i;
	}
	return $sum;
}

$result = sumOfnumbers(112); 

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
				<?php echo $result ?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
