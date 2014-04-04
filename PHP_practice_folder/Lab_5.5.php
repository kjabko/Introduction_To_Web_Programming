<?php


$number = $_GET['number'];
$complete = 0;
$x = 1;
while ( $complete < $x) {

	
	for ($i=1; $i <= $number ; $i++) { 
		echo "<p>Number is currently equal to " . $i."</p>";
	}


echo "<p>";
echo "All ".$number." loops are finished now!";

	$complete++;
	$number = $x;
}




?>