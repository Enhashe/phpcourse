<?php
//require 'lib/functions.php';

require __DIR__ . '/../classes/Task.php';

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
			),
			'mysql' => array(
				'title' => 'MySQL',
				'tasks' => array('1', '2', '3', '4', '5')
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
/*	$title = getTaskTitle($section, $taskNumber);
	require __DIR__ .  '../../tasks/' . $section . '/' . $taskNumber . '.php';*/
	$pageTitle = getTaskTitle($section, $taskNumber);
 	$description = ''; // @todo get description from tasksMap
 	$categoryCode = $section;
 	$task = new Task($taskNumber, $categoryCode, $description);
 	$inputData = [];
 	$result = $task->run($inputData);
	return [
/*		'title' => $title,
		'description' => $taskDescription,
		'inputData' => $inputData,*/
		'title' => $pageTitle,
 		'description' => $task->getDescription(),
 		'inputData' => $inputData,
		'result' => $result
	];
}
