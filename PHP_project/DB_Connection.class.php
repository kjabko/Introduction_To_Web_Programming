<?php
/********************************************************************
* Author: Krzysztof Jablonski
* Assignment: WE3.1 PHP Web App Assignment, Digital Skills Academy
* Student ID: D13126785 
* Date: 2014/02/14
* Ref: 

*********************************************************************/


//this class facilitates connection to DB and retrieve data for user adequately to query
class DB_Connection
{
//variable to be used for assinging DB connection in a method
public $dbconnection;
//variable to be used for assinging DB query in a method
public $myQuery;

//setter for DB connection, allows to inject details of targeted DB from outside of the class
public function __construct($host, $username, $password, $dbname)
{

//setting connection using PHP function
$this->dbconnection = mysqli_connect($host, $username, $password, $dbname);
 

}
 //this method checks against DB if a user's input matches any entry in "last_name" column, if true it returns data from DB
public function getLastName($last_name)
{

//performs direct mysql query using mysql syntacs if unsuccessfull returns error with some info 
$this->myQuery = "SELECT * FROM library WHERE last_name = '$last_name'" or die ('Error...'. mysqli_error($this->dbconnection)); 
//combines DB connection and particular query into single variable
$result = $this->dbconnection->query($this->myQuery);

//loops through columns in DB to return data matching query
while ($row = mysqli_fetch_array ($result)) {
{
//echo out selected data from DB in browser
echo 'Author: <strong><u>' . $row[3] . '</u></strong>, ';
echo  $row[1] . '<br />';
echo 'Title: ' . $row[4] . '<br />';
echo 'Publisher: ' . $row[5] . '<br />';
echo 'ISBN: ' . $row[6] . '<br />';
echo 'No of pages: '.$row[7].'<br /><br />';
}
}
}
//checks against DB if a user's input matches any entry in"title" column, if true it returns data from DB

public function getTitle($title)
{
	$this->myQuery = "SELECT * FROM library WHERE title LIKE '%$title%'" or die ('Error...'. mysqli_error($this->dbconnection)); 

	$result = $this->dbconnection->query($this->myQuery);

	while ($row = mysqli_fetch_array($result))
	{
		echo 'Author: ' . $row[3] . ', ';
		echo  $row[1] . '<br />';
		echo 'Title: <strong><u>' . $row[4] . '</u></strong><br />';
		echo 'Publisher: ' . $row[5] . '<br />';
		echo 'ISBN: ' . $row[6] . '<br />';
		echo 'No of pages: '.$row[7].'<br /><br />';
	}
}

//checks against DB if a user's input matches any entry in "first_name" column, if true it returns data from DB
public function getfirstName($first_name)
{
	$this->myQuery = "SELECT * FROM library WHERE first_name = '$first_name'" or die ('Error...'. mysqli_error($this->dbconnection)); 


	$result = $this->dbconnection->query($this->myQuery);

	while ($row = mysqli_fetch_array($result))
	{
	echo 'Author: ' . $row[3] . ', ';
	echo  '<strong><u>'.$row[1] . '</u></strong><br />';
	echo 'Title: ' . $row[4] . '<br />';
	echo 'Publisher: ' . $row[5] . '<br />';
	echo 'ISBN: ' . $row[6] . '<br />';
	echo 'No of pages: '.$row[7].'<br /><br />';
	}
}

//checks against DB if a user's input matches any entry in "publisher" column, if true it returns data from DB
	public function getPublisher($publisher)
{
	$this->myQuery = "SELECT * FROM library WHERE publisher = '$publisher'" or die ('Error...'. mysqli_error($this->dbconnection)); 


	$result = $this->dbconnection->query($this->myQuery);

	while ($row = mysqli_fetch_array($result))
	{
		echo 'Author: ' . $row[3] . ', ';
		echo  $row[1] . '<br />';
		echo 'Title: ' . $row[4] . '<br />';
		echo 'Publisher: <strong><u>' . $row[5] . '</u></strong><br />';
		echo 'ISBN: ' . $row[6] . '<br />';
		echo 'No of pages: '.$row[7].'<br /><br />';

	}
}

//checks against DB if a user's input matches any entry in "isbn" column, if true it returns data from DB
public function getISBN($isbn)
{
	$this->myQuery = "SELECT * FROM library WHERE isbn = '$isbn'" or die ('Error...'. mysqli_error($this->dbconnection)); 


	$result = $this->dbconnection->query($this->myQuery);

	while ($row = mysqli_fetch_array($result))
	{
		echo 'Author: ' . $row[3] . ', ';
		echo  $row[1] . '<br />';
		echo 'Title: ' . $row[4] . '<br />';
		echo 'Publisher: ' . $row[5] . '<br />';
		echo 'ISBN: <strong><u>' . $row[6] . '</u></strong><br />';
		echo 'No of pages: '.$row[7].'<br /><br />';


	}
}
	
	


}




?>
