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
?>

<!DOCTYPE html>

<html>

	<head>

		<!-- Head section -->
		<?php require_once __DIR__ . '/../tpl/inc/head-section.inc.php' ?> 

		<title>
			<?php
			if ( isset($taskData->data['name']) ) printf('Viewing Task %s', $taskData->data['name']);
			else echo 'Task could not be found'
			?> 
		</title>
	
	</head>

	<body>
		
		<div id="wrap">

			<!-- Navbar -->
			<?php require_once __DIR__ . '/../tpl/inc/navbar.inc.php' ?>
			
			<article class="container">
				
				<div class="page-header">
					<h1>
						<?php
						if ( isset($taskData->data['name']) ) printf('Viewing Task <strong>%s</strong>', $taskData->data['name']);
						else echo 'Task could not be found'
						?>
					</h1>
				</div>

				<?php if (!empty($taskData->data) ) : ?>

					<table class="table">

						<tr>
							<td width="200">Task ID</td>
							<td># <?= $taskData->data['id'] ?></td>
						</tr>

						<tr>
							<td>Task Name</td>
							<td><?= $taskData->data['name'] ?></td>
						</tr>

						<tr>
							<td>Task Description</td>
							<td><?= $taskData->data['description'] ?></td>
						</tr>

						<tr>
							<td>Created</td>
							<td><?= date('d/m/Y H:i:s', strtotime($taskData->data['created_at'])) ?></td>
						</tr>

						<tr>
							<td>Updated</td>
							<td><?= strtotime($taskData->data['updated_at']) ? date('d/m/Y H:i:s', strtotime($taskData->data['updated_at'])) : 'N/A' ?></td>
						</tr>

						<tr>
							<td>Completed</td>
							<td><?= strtotime($taskData->data['completed_at']) ? '<span class="glyphicon glyphicon-ok"></span>' . ' Completed on: ' . date('d/m/Y H:i:s', strtotime($taskData->data['completed_at'])) : '<span class="glyphicon glyphicon-remove"></span>' ?></td>
						</tr>
					
					</table>
			
				<?php else : ?>
					
					<div class="bs-callout bs-callout-warning col-xs-3">
						Task could not be found
					</div>

				<?php endif ?>

				<div class="row col-md-12">
					<br>
					<a class="btn btn-lg btn-primary" href="task/view-all-tasks.php" role="button">View all Tasks</a>
				</div>

			</article> <!-- /.container -->

		</div> <!-- /#wrap -->

		<!-- Footer -->
		<?php require_once __DIR__ . '/../tpl/inc/footer.inc.php' ?>
		
		<!-- JavaScript -->
		<?php require_once __DIR__ . '/../tpl/inc/js.inc.php' ?>
			
	</body>

</html>
