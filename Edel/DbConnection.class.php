<?php

/******************************************************************
* Author: Edel Doherty
* Assignment: WE3.1 PHP Web App Assignment, Digital Skills Academy
* Student ID: D13126690
* Date : 2014/02/D14
******************************************************************/

/******************************************************************
* Classname:  DbConnection
* Version: 1
*
* Description: Class which connects to the MySql database and 
* retrieves all data filtered by artist 
*******************************************************************/

class DbConnection {

	//private properties
	private $runQuery;
	private $dbConnect;

	//constructor method to validate the object
	public function __construct($host, $username, $password, $dbname) {
		     
		//establish connection to MySql database
		$this->dbConnect = mysqli_connect($host, $username, $password, $dbname);

	}

	//method to retrieve all DB data
	public function getDbData() {				 

		global $bandSlashes;

		$this->runQuery = "SELECT * FROM Discography WHERE artist='" . $bandSlashes . "'"   

						   or die("Error - we were unable to make that connection" . mysqli_error($dbConnect));

		$result = $this->dbConnect->query($this->runQuery);


		//error check on query
		if (!$this->runQuery) {												//Code reuse 
    	printf("Error: %s\n", mysqli_error($this->dbConnect));				// Ref: Code provided by fellow participant: Derek White
    	exit(); 											


}

		$catNoPrefix="afb#";  	//variable to prefix label id to catalogue number (also unique identifier) 

		//results and output format of the query 
		while($row = mysqli_fetch_array($result)) {
		echo $row["artist"] . " released " . $row["releaseName"] . " (" . $catNoPrefix . $row["catNo"] . ") <br>";
		}
	}   

}


?>