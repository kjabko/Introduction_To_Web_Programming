<?php
class MyArrayStuff {

	public function getElement($myArrayElement, $myIndexNumber) {

		return $myArrayElement[$myIndexNumber];

	}

}

/**
* 
*/
class AnotherArray extends MyArrayStuff
{
	
	
}

$myArray = array('one','two','three');
$mas = new MyArrayStuff;

echo $mas->getElement($myArray, 2);

$extraArray = array('dog', 'cat', 'horse', 'donkey');
$obj = new AnotherArray;
echo "<p/>";
echo $obj->getElement($extraArray, 1);
?>
