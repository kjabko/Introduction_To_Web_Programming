<?php




class Consolidator{

private $query_word;


public function __construct($host, $username, $password, $dbname){




global $data;

$this->data = new DB_Connection($host, $username, $password, $dbname);


}



public function Queries($query_word) {

switch ($query_word) {
	/*case $this->data->getLastName($query_word):
	$this->data->getLastName($db_result);
		break;

	case $this->data->getFirstName($query_word):
	$this->data->getFirstName($db_result);
		break;

	case $this->data->getTitle($query_word):
	$this->data->getTitle($db_result);
		break;

	case $this->data->getPublisher($query_word):
	$this->data->getPublisher($db_result);
		break;

	case $this->data->getISBN($query_word):
		$this->data->getISBN($db_result);
		break; */
	case $this->data->get_author($query_word):
		$this->data->get_author($db_result);
		break;
	//case $this->data->get_publisher_isbn($query_word):
		//$this->data->get_publisher_isbn($db_result);
		
		default:
			
			break;
	}
} 


}


?>