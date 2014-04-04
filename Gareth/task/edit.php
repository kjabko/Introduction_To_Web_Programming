<?php
/**
 * Author: 		Gareth Moran
 * Assignment:	WE3.1 PHP Web App Assignment, Digital Skills Academy
 * Date:		2014/02/12
 */

// Require the helpers library
require_once __DIR__ . '/../php/helpers.php';

// Get the task id from the task-id query string
if ( get('task-id') ) {
	// task-id query string
	$taskId = get('task-id');

	// Get the task class and get the task data
	require_once __DIR__ . '/../php/classes/Tasks.class.php';

	// Instantiate the task class
	$task = new Task;

	// Get the task data
	$taskData = $task->get($taskId);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	function validate_form()
	{
		$errors = [];
		
		// Validation rules
		if ( empty($_POST['taskName']) ) $errors['taskName'] = 'Please enter a task name';
		
		return $errors;
	}

	$errors = validate_form();
	
	// If the form validation passes: Update the task
	if ( empty($errors) ) {
		
		if ($task->update()->affected_rows) {
			header('Location: msg-task-updated.php');
		}
	}
}
?>

<!DOCTYPE html>

<html>

	<head>

		<!-- Head section -->
		<?php require_once __DIR__ . '/../tpl/inc/head-section.inc.php' ?> 

		<title><?= !empty($taskData->data) ? sprintf('Edit Task - %s', $taskData->data['name'])  : 'Task could not be found' ?></title>
	
	</head>

	<body>
		
		<div id="wrap">

			<!-- Navbar -->
			<?php require_once __DIR__ . '/../tpl/inc/navbar.inc.php' ?>
			
			<article class="container">
				
				<div class="page-header">
					<h1><?= isset($taskData->data) ? sprintf('Edit Task <strong>%s</strong>', $taskData->data['name']) : 'Task could not be found' ?></h1>
				</div>

				<!-- If a task was retrieved then show the update form -->
				<?php if ( isset($taskData) AND !empty($taskData->data) ) : ?>
			
					<form action="<?= htmlentities($_SERVER['REQUEST_URI']) ?>" method="post" class="col-xs-3">

						<div class="form-group">
							<label for="taskName">Task Name</label>
							<input type="text" class="form-control" id="taskName" name="taskName" placeholder="Task Name" value="<?= postKeyExists('taskName') ? postInput('taskName') : $taskData->data['name'] ?>">
						</div>

						<div class="form-group">
							<label for="taskDescription">Task Description</label>
							<textarea class="form-control" rows="3" id="taskDescription" name="taskDescription" placeholder="Task Description"><?= postKeyExists('taskDescription') ? postInput('taskDescription') : $taskData->data['description'] ?></textarea>
						</div>

						<?php
						/**
						 * Should the taskCompleted checkbox be checked?
						 *
						 * If this is NOT a POST request (i.e. the form is loaded for the first time) and the completed_at field is not 0000-00-00 00:00:00
						 * OR
						 * If this is a POST request and the checkbox is checked
						 * Set the checkbox to checked
						 */

						if ( ( $_SERVER['REQUEST_METHOD'] !== 'POST' AND strtotime($taskData->data['completed_at']) ) OR post('taskCompleted') ) {
							$taskCompletedChecked = 'checked';
						}
						else {
							$taskCompletedChecked = '';
						}
						?>
						<div class="checkbox">
							<label>
								Completed? <input type="checkbox" id="taskCompleted" name="taskCompleted" value="1" <?= $taskCompletedChecked ?>>
							</label>
						</div>

						<input type="hidden" name="taskId" value="<?= $taskData->data['id'] ?>">

						<div class="form-group">
							<input class="btn btn-success" type="submit" value="Update Task">
						</div>

					</form>

					<?php if ( !empty($errors) ) require_once __DIR__ . '/../tpl/inc/form-errors.inc.php' ?>

				<?php else : ?>
					
					<div class="bs-callout bs-callout-warning col-xs-3">
						Task could not be found
					</div>

				<?php endif ?>

			</article> <!-- /.container -->

		</div> <!-- /#wrap -->

		<!-- Footer -->
		<?php require_once __DIR__ . '/../tpl/inc/footer.inc.php' ?>
		
		<!-- JavaScript -->
		<?php require_once __DIR__ . '/../tpl/inc/js.inc.php' ?>
			
	</body>

</html>
