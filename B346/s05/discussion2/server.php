<?php
	session_start();

	class TaskList{
		//Add a Task
		public function add($description){

			//create a "$newTask" object with a "$description" and set it s not finished

			$newTask = (object)[
				'description' => $description,
				'isFinished' => false
			];

			//check if the 'tasks' session variable exists, and create an empty numeric array

			if ($_SESSION['tasks'] === null){
				$_SESSION['tasks'] = array();
			}

			//Add the new task to the 'tasks' session array
			array_push($_SESSION['tasks'],$newTask);
		}

		//Updating Task

		public function update($id, $description, $isFinished){
			$_SESSION['tasks'][$id]->description = $description;
			$_SESSION['tasks'][$id]->isFinished = ($isFinished !== null)? true : false;
		}

		//Deleting Task

		public function remove($id){
			array_splice($_SESSION['tasks'], $id, 1);
		}

		public function clear(){
			session_destroy();
		}

	}

	$taskList = new TaskList();

	if($_POST['action'] === 'add'){
		$taskList->add($_POST['description']);
	}
	else if($_POST['action'] === 'update'){
		$taskList->update($_POST['id'],$_POST['description'],$_POST['isFinished']);
	}
	else if($_POST['action'] === 'remove'){
		$taskList->remove($_POST['id']);
	}
	else if($_POST['action'] === 'clear'){
		$taskList->clear();
	}

	var_dump($_SESSION);




	header('Location: ./index.php');

?>
