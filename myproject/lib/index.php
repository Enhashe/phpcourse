<?php
//require 'lib/functions.php';
function getTaskMap(){
	return $taskStructure = array(
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
			),
			'datetime' => array(
				'title' => 'Datetime',
				'tasks' => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16')
			)
		);
}

function getTaskTitle($section, $taskNumber){
	$taskMap = getTaskMap();
	$sectionData = $taskMap[$section];
	$titleSection = $sectionData['title'];
	$titleTask = $sectionData['tasks'][$taskNumber - 1];
	$pageTitle = [$titleSection, $titleTask];
	return implode('->', $pageTitle);
}

function getTask($section, $taskNumber){
	$taskMap = getTaskMap();
	$title = getTaskTitle($section, $taskNumber);
	require __DIR__ .  '/../tasks/' . $section . '/' . $taskNumber . '.php';
	return [
		'title' => $title,
		'description' => $taskDescription,
		'inputData' => $inputData,
		'result' => $result
	];
}
?>