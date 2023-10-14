<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Client-Server Communication (Basic To-Do)</title>
</head>
<body>
	<!-- Initialize a new session or resume an existing one -->
	<!-- This must be the very first thing in your document before adding any HTML tags -->
	<?php session_start(); ?>
	
	<h3>Add Task</h3>

	<form method="POST" action="./server.php">
		<input type="hidden" name="action" value="add"/>
		Description: <input type="text" name="description" required/>
		<button type="submit">Add</button>
	</form>

	<h3>Task List</h3>

	<?php if (isset($_SESSION['tasks'])): ?>

		<?php foreach ($_SESSION['tasks'] as $index => $task): ?>

			<div>
				<form method="POST" action="./server.php" style="display:inline-block;">
					<input type="hidden" name="action" value="update"/>
					<input type="hidden" name="id" value="<?php echo $index; ?>"/>
					<input type="checkbox" name="isFinished" <?php echo ($task->isFinished) ? 'checked': null; ?>/>
					<!-- <input checked/> -->
					<input type="text" name="description" value="<?php echo $task->description; ?>"/>
					<input type="submit" value="update"/>
				</form>

				<form method="POST" action="./server.php" style="display:inline-block;">
					<input type="hidden" name="action" value="remove"/>
					<input type="hidden" name="id" value="<?php echo $index; ?>"/>
					<input type="submit" value="delete"/>
				</form>
			</div>
				
		<?php endforeach; ?>
	<?php endif; ?>

	<br><br>
	<form method="POST" action="./server.php">
		<input type="hidden" name="action" value="clear"/>
		<button type="submit">Clear All Tasks</button>
	</form>


</body>
</html>
