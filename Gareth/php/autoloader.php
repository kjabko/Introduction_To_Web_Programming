<?php
/**
 * Author: 		Gareth Moran
 * Assignment:	WE3.1 PHP Web App Assignment, Digital Skills Academy
 * Date:		2014/02/12
 */

// Anonymous autoloader function
spl_autoload_register(function ($class) {
	$fileLocation = __DIR__ . '/classes/' . $class . '.class.php';
	file_exists($fileLocation) ? require_once $fileLocation : die("Error: Unable to load the class '$class' from the location '$fileLocation'.");
});
