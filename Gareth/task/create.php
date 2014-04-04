<?php
/**
 * Author: 		Gareth Moran
 * Assignment:	WE3.1 PHP Web App Assignment, Digital Skills Academy
 * Date:		2014/02/12
 */

// Require the helpers library
require_once __DIR__ . '/../php/helpers.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	function validate_form()
	{
		$errors = [];
		
		// Validation rules
		if ( empty($_POST['taskName']) ) $errors['taskName'] = 'Please enter a task name';
		
		return $errors;
	}

	$errors = validate_form();
	
	// If the form validation passed
	if ( empty($errors) ) {
		// Get the task class
		require_once __DIR__ . '/../php/classes/Tasks.class.php';
		
		// Create a new task and redirect
		$task = new Task;
		if ($task->create()->affected_rows) {
			header('Location: msg-task-created.php');
		}
	}
}
?>

<!DOCTYPE html>

<html>

	<head>

		<!-- Head section -->
		<?php require_once __DIR__ . '/../tpl/inc/head-section.inc.php' ?> 

		<title>Create a New Task</title>
	
	</head>

	<body>
		
		<div id="wrap">

			<!-- Navbar -->
			<?php require_once __DIR__ . '/../tpl/inc/navbar.inc.php' ?>
			
			<article class="container">
				
				<div class="page-header">
					<h1>Create a New Task</h1>
				</div>
			
				<form action="<?= htmlentities($_SERVER['PHP_SELF']) ?>" method="post" class="col-xs-3">

					<div class="form-group">
						<label for="taskName">Task Name</label>
						<input type="text" class="form-control" id="taskName" name="taskName" placeholder="Task Name" value="<?= postInput('taskName') ?>">
					</div>

					<div class="form-group">
						<label for="taskDescription">Task Description</label>
						<textarea class="form-control" rows="3" id="taskDescription" name="taskDescription" placeholder="Task Description"><?= postInput('taskDescription') ?></textarea>
					</div>

					<div class="checkbox">
						<label>
							Completed? <input type="checkbox" id="taskCompleted" name="taskCompleted" value="1" <?= postInput('taskCompleted') ? 'checked' : '' ?>>
						</label>
					</div>

					<div class="form-group">
						<input class="btn btn-success" type="submit" value="Create Task">
					</div>

				</form>

				<?php if ( !empty($errors) ) require_once __DIR__ . '/../tpl/inc/form-errors.inc.php' ?>

			</article> <!-- /.container -->

		</div> <!-- /#wrap -->

		<!-- Footer -->
		<?php require_once __DIR__ . '/../tpl/inc/footer.inc.php' ?>
		
		<!-- JavaScript -->
		<?php require_once __DIR__ . '/../tpl/inc/js.inc.php' ?>
			
	</body>

</html>
