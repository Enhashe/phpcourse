
	
<?php 
	$path = '';
	if (!empty($_GET['path'])) {
		$path = $_GET['path'];
	}
	var_dump($path);
	$pathChunks = explode('-', $path);
	var_dump($pathChunks);
	$taskStructure = array(
			'loops' => array(
				'title' => 'Loops',
				'tasks' => array('1','2','3','4','5')
			),
			'arrays_1' => array(
				'title' => 'Arrays_1',
				'tasks' => array('1','2','3','4','5')
			),
			'arrays_2' => array(
				'title' => 'Arrays_2',
				'tasks' => array('1','2','3','4','5')
			)
		);
		var_dump($taskStructure);
	$section = $pathChunks[0];
	$task = $pathChunks[1];
	require __DIR__ . '/tasks/' . $section . '/' . $task . '.php';
	
?>
<?php require 'view/header.php'; ?>
<div class="content">
	<?php require 'view/menu.php'; ?>
		<div class="workarea">
			<div><h1>Loops</h1></div>
			<div class="task-item">
			<?php echo var_dump($_GET) ?>
			</div>
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
<?php require 'view/footer.php'; ?>
