
<?php 
	$path = '';
	$isMainPage = false;
	if (!empty($_GET['path'])) {
		
		require 'lib/functions.php';
		
		$isMainPage = true;
		$path = $_GET['path'];
		$pathChunks = explode('-', $path);
		$taskStructure = array(
				'loops' => array(
					'title' => 'Loops',
					'tasks' => array('1','2','3','4','5','6')
				),
				'arrays_1' => array(
					'title' => 'Arrays_1',
					'tasks' => array('1','2','3','4','5','6','7')
				),
				'arrays_2' => array(
					'title' => 'Arrays_2',
					'tasks' => array('1','2','3','4','5'),
				),
				'functions' => array(
					'title' => 'Functions',
					'tasks' => array('1','2','3','4','5')
				)
			);

		$section = $pathChunks[0];
		$task = $pathChunks[1];
		$sectionData = $taskStructure[$section];
		$titleSection = $sectionData['title'];
		$titleTask = $sectionData['tasks'][$task - 1];
		$pageTitle = array($titleSection, $titleTask);

		require __DIR__ . '/tasks/' . $section . '/' . $task . '.php';
		
	} else {
		$isMainPage = false;
	}
?>
<?php require 'view/header.php'; ?>
<div class="content">
	<?php require 'view/menu.php'; ?>
		<div class="workarea">
			<?php
				if ($isMainPage == true) {
			?>
					<div><h1><?php echo implode(' -> ', $pageTitle) ?></h1></div>
					<div class="task-item">
						Task:<br>
						<?php echo $taskDescription; ?>
					</div>
					<div class="task-item">
						Input Data:<br>
						<?php echo $inputData; ?>
					</div>
					<div class="task-item">
						Output Data:<br>
						<?php echo $result; ?>
					</div>
					<div class="task-item">
						Code:<br>
						...
					</div>
			<?php
				} else {
			?>
					<div><h1>Превед!</h1></div>
					<div class="task-item">
						Здесь должен быть текст.<br>
						Изтекста в голове только.... Бугагагага.<br>
						<<<--- Если ткнуть в ту сторону, то можно увидеть немного магии.<br>
					</div>
			<?php } ?>
		</div>
	</div>
<?php require 'view/footer.php'; ?>



