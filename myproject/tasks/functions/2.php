<?php 
function factorial($counter = 1) {
	if ($counter < 0) {
		return 0;
	} elseif ($counter == 0) {
		return 1;
	} else {
	return ($counter * factorial($counter - 1));
	}
}

$result = factorial(4);
 
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
				<?php echo $result; ?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
