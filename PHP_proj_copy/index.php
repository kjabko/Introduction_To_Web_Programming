
<!doctype html>
<html lang=eng>
<head><title>Library</title></head>
<body>
<h1>Library Search</h1>

<?php


//If form not submitted, display form.
//if (!isset($_POST['submit'])) {
?>


<form method= 'post' action= ''>
	
	<input type= 'text' name= 'book' size= '80' onblur="if (this.value == '') 
	{this.value = 'Enter a word such as author first or last name, book title(portion), publisher or ISBN';}" 
	onfocus="if(this.value == 'Enter a word such as author first or last name, book title(portion), publisher or ISBN') {this.value = '';}" 
	value="Enter a word such as author first or last name, book title(portion), publisher or ISBN">

	<input type= "submit" name= "submit" value= "Search">

	</form>

	
	
	<p><h2>Search result</h2><p/>
	

<?php
include_once 'DB_Connection.class.php';
include_once 'Consolidator.class.php';




function getIfSet(& $var) {
    if (isset($var)) {
        return $var;
    }
    return 'No result';
}

$user = getIfSet($_POST['book']);
	

$object = new Consolidator('localhost', 'root', '', 'library');



$object->Queries($user);


?>


</body>
</html>










