<?php


$a = 1;
$b = 1;
echo "0, $a, $b, ";
for ($i=0; $i < 10 ; $i++) { 
	$a = $a + $b;
	$b = $a +$b;
	echo "$a, $b, ";
}




?>