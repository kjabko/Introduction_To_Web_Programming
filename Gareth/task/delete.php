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
	$taskDeletion = $task->delete($taskId);
}
?>

<!DOCTYPE html>

<html>

	<head>

		<!-- Head section -->
		<?php require_once __DIR__ . '/../tpl/inc/head-section.inc.php' ?> 

		<title><?= (isset($taskId) AND $taskDeletion->affected_rows) ? 'Task Deleted Successfully' : 'Task Not Deleted' ?></title>
	
	</head>

	<body>
		
		<div id="wrap">

			<!-- Navbar -->
			<?php require_once __DIR__ . '/../tpl/inc/navbar.inc.php' ?>
			
			<article class="container">
				
				<div class="page-header">
					<h1><?= (isset($taskId) AND $taskDeletion->affected_rows) ? 'Task Deleted Successfully' : 'Task Not Deleted' ?></h1>
				</div>

				<?php if (isset($taskId) AND $taskDeletion->affected_rows) : ?>
			
					<div class="bs-callout bs-callout-info col-xs-5">
						The task has been deleted successfully.
					</div>

				<?php else : ?>

					<div class="bs-callout bs-callout-danger col-xs-5">
						<h4>Error</h4>
						The task was not deleted successfully.
					</div>

				<? endif ?>
				
				<div class="row col-md-12">
					<br>
					<a class="btn btn-lg btn-primary" href="task/view-all-tasks.php" role="button">View Tasks</a>
				</div>

			</article> <!-- /.container -->

		</div> <!-- /#wrap -->

			<!-- Footer -->
			<?php require_once __DIR__ . '/../tpl/inc/footer.inc.php' ?>
		
		<!-- JavaScript -->
		<?php require_once __DIR__ . '/../tpl/inc/js.inc.php' ?>
			
	</body>

</html>
