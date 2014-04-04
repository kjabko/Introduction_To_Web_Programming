<?php



class DB_Connection
{

public $dbconnection;
public $myQuery;


public function __construct($host, $username, $password, $dbname)
{


$this->dbconnection = mysqli_connect($host, $username, $password, $dbname);


}


public function get_author($author){

	$this->myQuery = "SELECT * FROM library WHERE last_name = '$author'"  or die ('Error...'. mysqli_error($this->dbconnection));
	$result = $this->dbconnection->query($this->myQuery);

	
	
while ($row = mysqli_fetch_array($result))
{
echo 'Author: ' . $row[3] . ', ';
echo  $row[1] . '<br />';
echo 'Title: ' . $row[4] . '<br />';
echo 'Publisher: ' . $row[5] . '<br />';
echo 'ISBN: ' . $row[6] . '<br />';
echo 'No of pages: '.$row[7].'<br /><br />';

}
}
/*public function get_publisher_isbn($publ_isbn){

	$this->myQuery = "SELECT * FROM library WHERE publisher or isbn = '$publ_isbn'"  or die ('Error...'. mysqli_error($this->dbconnection));
	$result = $this->dbconnection->query($this->myQuery);

	
	
while ($row = mysqli_fetch_row($result))
{
echo 'Author: ' . $row[3] . '<br />';
echo 'First Name: ' . $row[1] . '<br />';
echo 'Title: ' . $row[4] . '<br />';
echo 'Publisher: ' . $row[5] . '<br />';
echo 'ISBN: ' . $row[6] . '<br /><br />';

}	
*/
}





?>
