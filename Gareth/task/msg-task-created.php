<?php
/**
 * Author: 		Gareth Moran
 * Assignment:	WE3.1 PHP Web App Assignment, Digital Skills Academy
 * Date:		2014/02/12
 */
?>

<!DOCTYPE html>

<html>

	<head>

		<!-- Head section -->
		<?php require_once __DIR__ . '/../tpl/inc/head-section.inc.php' ?> 

		<title>Task Created</title>
	
	</head>

	<body>
		
		<div id="wrap">

			<!-- Navbar -->
			<?php require_once __DIR__ . '/../tpl/inc/navbar.inc.php' ?>
			
			<article class="container">
				
				<div class="page-header">
					<h1>Task Created</h1>
				</div>
			
				<div class="bs-callout bs-callout-info col-xs-5">
					Your task has been created successfully.
				</div>
				
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
