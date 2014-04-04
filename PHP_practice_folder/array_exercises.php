<?php

/*$fruits = array('orange', 'apple', 'pear', 'plum', 'banana', 'melon');

$mySize = sizeof($fruits);
//foreach ($fruits as $food) { 
 for ($i=1; $i <= ($mySize - 1); $i++) { 
   		
   	  	$i = $fruits;

      echo "<p>Do you like ". $i."?</p>";
}
*/

//function test ()

//echo ucfirst(strtolower("you can have as many cakes as you like. uhygt"));

$kr = "krzyk";
$mi = "mik";
$da = "dan";
$ad = "adek";

//echo $kr, $mi, $da, $ad;
echo "<br>";

function names(&$a, &$b, &$c, &$d) {

$a = ucfirst(strtolower($a));
$b = ucfirst(strtolower($b));
$c = ucfirst(strtolower($c));
$d = ucfirst(strtolower($d));
return array($a,$b,$c,$d);
}

names ($kr, $mi, $da, $ad);
echo $kr." ".$mi." ".$da." ".$ad;


//nam = names("krzyk", "mik", "dan", "adEK");


//echo $nam[2]." " .$nam[0]." " .$nam[1]." " .$nam[3];



?>