<?php

/*****************************************************************
* Author: Edel Doherty
* Assignment: WE3.1 PHP Web App Assignment, Digital Skills Academy
* Student ID: D13126690
* Date : 2014/02/14
*****************************************************************/
?>

<!DOCTYPE html>
 <html lang="en">
  <head>
   <title>Art for Blind Records Artist / Record look-up app</title>
   <meta charset="utf-8" />
   <link href="reset.css" rel="stylesheet" type="text/css" />
   <link href="styles.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  	<div class="container">

	<?

	$band = $_POST["bands"];
	$bandSlashes = addslashes($band);              	// Code reuse
													// Ref: Code provided by tutor: Daniel Griffin


	//bring in functionality from DbConnection Class
	include("DbConnection.class.php");

	//create an instance of the DbConnection class, passing in the arguments for making the connection
	$dbOutput = new DbConnection("localhost" , "root" , "" , "db_artforblind");

	//run the MySql query to display the data to the browser
	$dbOutput->getDbData();

	?>
	</div>
  </body>
 </html>