<?php

class Arrays {

public function getElement($myIndexNumber, $myLocalArray) {

	return $myLocalArray[$myIndexNumber];

}

}

$myArray = array('one','two','three');
$myArray2 = array('x','y','z');

$obj= new Arrays;
$obj1= new Arrays;

echo $obj->getElement(2, $myArray);
echo "<br>";
echo $obj1->getElement(2, $myArray2);




?>
