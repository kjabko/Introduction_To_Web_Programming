<?php

$myArray = array('one','two','three');
$myArray2 = array('x', 'y', 'z');
//var_dump($myArray);





function simpleArray ($myIndexParameter, $myOtherParameter ) {

for ($i = 0 ; $i <= 2 ; $i++) {

	

	echo $myIndexParameter[$i], $myOtherParameter[$i]; }

}

echo simpleArray ($myArray2, $myArray);


?>
