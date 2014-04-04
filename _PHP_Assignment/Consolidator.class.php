<?php
/********************************************************************
* Author: Krzysztof Jablonski
* Assignment: WE3.1 PHP Web App Assignment, Digital Skills Academy
* Student ID: D13126785
* Date: 2014/02/14
* Ref: 

*********************************************************************/




class Consolidator{

private $query_word;


public function __construct($host, $username, $password, $dbname){




global $data;
//create connection to DB object
$this->data = new DB_Connection($host, $username, $password, $dbname);


}


//method contains conditional statements for quering DB, input from $_POST is inserted into this method to iteratively check each case for match against mysql BD 
//if match found the matching case calls the suitable mysql record and echo it out to the browser
public function Queries($query_word) {

switch ($query_word) {
	case $this->data->getLastName($query_word):
	$this->data->getLastName($query_word);
		break;

	case $this->data->getFirstName($query_word):
	$this->data->getFirstName($query_word);
		break;

	case $this->data->getTitle($query_word):
	$this->data->getTitle($query_word);
		break;

	case $this->data->getPublisher($query_word):
	$this->data->getPublisher($query_word);
		break;

	case $this->data->getISBN($query_word):
		$this->data->getISBN($query_word);
		break;

	
} 


}
}


?>