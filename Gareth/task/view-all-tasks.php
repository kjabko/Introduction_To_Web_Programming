<?php
/**
 * Author: 		Gareth Moran
 * Assignment:	WE3.1 PHP Web App Assignment, Digital Skills Academy
 * Date:		2014/02/12
 */

// Require the helpers library
require_once __DIR__ . '/../php/helpers.php';

// Get the task class and get the tasks
require_once __DIR__ . '/../php/classes/Tasks.class.php';

// Instantiate the task class
$task = new Task;

// Get the tasks
$tasks = $task->getAllTasks();
?>

<!DOCTYPE html>

<html>

	<head>

		<!-- Head section -->
		<?php require_once __DIR__ . '/../tpl/inc/head-section.inc.php' ?> 

		<title>Viewing Tasks</title>
	
	</head>

	<body>
		
		<div id="wrap">

			<!-- Navbar -->
			<?php require_once __DIR__ . '/../tpl/inc/navbar.inc.php' ?>
			
			<article class="container">
				
				<div class="page-header">
					<h1>Viewing Tasks (<?= count($tasks->data) ?>)</h1>
				</div>

				<?php if (!empty($tasks->data) ) : ?>

					<table class="table table-bordered table-hover all-tasks">

						<tr>
							<th>Task ID</th>
							<th>Task Name</th>
							<th>Task Description</th>
							<th>Created</th>
							<th>Updated</th>
							<th>Completed</th>
							<th>&nbsp;</th>
						</tr>

						<?php foreach ($tasks->data as $taskData) : ?>

							<tr>
								<td><?= $taskData['id'] ?></td>
								<td><?= $taskData['name'] ?></td>
								<td width="200"><?= $taskData['description'] ?></td>
								<td><?= date('d/m/Y H:i:s', strtotime($taskData['created_at'])) ?></td>
								<td><?= strtotime($taskData['updated_at']) ? date('d/m/Y H:i:s', strtotime($taskData['updated_at'])) : 'N/A' ?></td>
								<td><?= strtotime($taskData['completed_at']) ? date('d/m/Y H:i:s', strtotime($taskData['completed_at'])) : '<span class="glyphicon glyphicon-remove"></span>' ?></td>
								<td>
									<a class="btn btn-success" href="task/view-task.php?task-id=<?= $taskData['id'] ?>" role="button">View</a>
									<a class="btn btn-primary" href="task/edit.php?task-id=<?= $taskData['id'] ?>" role="button">Edit</a>
									<a class="btn btn-danger" href="task/delete.php?task-id=<?= $taskData['id'] ?>" role="button">Delete</a>
								</td>
							</tr>

						<?php endforeach ?>
					
					</table>
			
				<?php else : ?>
					
					No tasks were created yet...

					<a class="btn btn-success btn-sm" href="task/create.php" target="_self" role="button">Create One?</a>

				<?php endif ?>

			</article> <!-- /.container -->

		</div> <!-- /#wrap -->

		<!-- Footer -->
		<?php require_once __DIR__ . '/../tpl/inc/footer.inc.php' ?>
		
		<!-- JavaScript -->
		<?php require_once __DIR__ . '/../tpl/inc/js.inc.php' ?>
			
	</body>

</html>
