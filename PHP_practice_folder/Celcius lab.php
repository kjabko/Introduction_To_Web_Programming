<?php
echo "Hello World!";
echo "<br>";
$celciusValue = 18.9;
$farenheitValue = $celciusValue * 5 / 9 + 32;
print ("Cescius value of " . $celciusValue . "is" . $farenheitValue . "farenheit");
echo "<br>";
//init
$pi = 3.14;
$radius = 15;
$theArea = 0;

/* inputs
no need to prompt for imput yer - we have ourt radius set in the code above */

$theArea = $pi * ($radius * $radius) ;

print ("Area of the circle with radius" . $radius . "is" . $theArea);
echo "<br>";
$theArea = $pi * ($radius * $radius);
//output
print ("The area of a circle" . $radius . "is" . $theArea);
echo "<br>";
$x = 70;
$y = 10;
$z = $x * $y;
echo $z;
echo "<br>";

?>