<?php

/*
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Krzysztof-DB';

$myNewConnection = mysqli_connect($host, $username, $password, $dbname);

$myQuery = "SELECT guessed_on FROM correct_guesses" or die("Error...". mysqli_error($myNewConnection));

$result = $myNewConnection->query($myQuery);

while ($row = mysqli_fetch_array($result))
{
	echo $row['guessed_on']. "<br>";
}

*/

class MyDB
{

public $dbconnection;
public $myQuery;
public $insert;

public function __construct($host, $username, $password, $dbname)
{


$this->dbconnection = mysqli_connect($host, $username, $password, $dbname);


}

public function InsertGuess($uid, $guess, $guessed_on)
{
	
$this->insert = "INSERT INTO correct_guesses (user_id, answer, guessed_on) VALUES ('".$uid."','".$guess."','".$guessed_on."')" or die ("Error...".mysqli_error($this->dbconnection));
}

public function MyConnection()
{

$this->query = "SELECT guessed_on FROM correct_guesses" or die ('Error...'. mysqli_error($this->dbconnection)); 

$result = $this->dbconnection->query($this->query);

while ($row = mysqli_fetch_array ($result)) {
echo $row['guessed_on']. "<br>";
}

}

}













?>