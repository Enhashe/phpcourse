<?php 
function numbersDividing5Contains3($counter = 1) {
	$result = '';
	for ($i = 0; $i <= $counter; $i++) {
		if ($i % 5 != 0) {
			for ($j = 0; $j < strlen($i); $j++) {
				$i = "$i";
				if ($i{$j} == 3) {
					$result = $result . "$i\t";
				}
				$i = (int)$i;
			}
		}
	}
	return $result;
}
$result = numbersDividing5Contains3(10000); 
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
