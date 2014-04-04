<?php
/********************************************************************
* Author: Krzysztof Jablonski
* Assignment: WE3.1 PHP Web App Assignment, Digital Skills Academy
* Student ID: D13126785
* Date: 2014/02/14
* Ref: 

*********************************************************************/
?>

<!doctype html>
<html lang=eng>
<head><title>Library</title></head>
<body>
<h1>Library Search</h1>



<form method= 'post' action= ''>
	
	<input type= 'text' name= 'book' size= '85' onblur="if (this.value == '') 
	{this.value = 'Enter a word such as author first or last name, book title(portion), publisher or ISBN from DB';}" 
	onfocus="if(this.value == 'Enter a word such as author first or last name, book title(portion), publisher or ISBN from DB') {this.value = '';}" 
	value="Enter a word such as author first or last name, book title(portion), publisher or ISBN from DB">

	<input type= "submit" name= "submit" value= "Search">

	</form>

	
	<?php 
//including the two files allows instantiate DB connection and use code from Consolidator class to query DB in this file 
include_once 'DB_Connection.class.php';
include_once 'Consolidator.class.php';


//removes error message form the browser when $_POST is empty 
function getIfSet(& $var) {
    if (isset($var)) {
        return $var;
    }
    return '';
}


//super variable $_POST is used for transfering user's input between files and classes to query DB
$user = getIfSet($_POST['book']);



//after user submited his input this conditional displays that input in the browser 
if (!empty($user)) {
	echo '<h2>Result for: '. ucfirst($user). '</h2>';

	}	else echo "";

//instantiates Consolidator class for passing DB connection details and performing DB query
$object = new Consolidator('localhost', 'root', '', 'library');

//passes a word inside $_POST to Consolidator class for DB query
$object->Queries($user);



?>


</body>
</html>










