<?php
/*echo "<p>\n";
$number = "abc";
$var1 = "xyz";
$counter = 0;
$counter1 = 0;

while ($counter <= 10) {
echo "$number ";
$counter++;	
}
echo "</p>\n";
echo "<p>\n";
do {
	echo "$var1 ";
	$counter1++;
} while ($counter1 <= 10);
echo "</p>\n";
echo "<p>\n";

for ($i=1; $i < 10 ; $i++) { 

	echo "$i ";
}
echo "<p>\n";
//$digit = 1;
$text = ". Item";
//$letter = 'A';
for ($digit=1, $letter="A"; $digit + $letter < 7; $digit++,$letter++)
 {  
 
 
	echo "<ul style='list-style: none'><li>$digit$text $letter</li></ul>";
}
echo "</p>\n";
echo "<p>\n";

for ($i=1; $i < 7 ; $i++) { 
	echo "$i";
}
echo "</p>\n";

$x = 1;
$y = 'A';
while ($x <= 6) {
	echo "<li>$x. Item $y</li>";
	$x++;
	$y++;
}
echo "</p>\n";
echo "<p>\n";

$alpha = 'A'; 
for ($z=1; $z < 7 ; $z++) { 
	echo "<ul style='list-style: none'<li>$z. Item $alpha</li></ul>";
$alpha++;
}
echo "</p>\n"; */
echo "<p>\n";


//========================================================================
// 2 to the power of ... program for subnetting
/*for ($x=2, pow (0, 2) ; $x <= 24 ; $x++ ) { 
	$y = pow(2, $x);
	echo "<li>2 to the power of $x is: $y</li>";
	 	
 } */
//=========================================================================

//using "for" loops to create multiplication table

 for ($i=1; $i < 8 ; $i++) { 

 	for ($x=2; $x < 8 ; $x++) { 
 		$y = $i * $x;
 		echo "<ul style='list-style: none'><li>$x</li></ul>$i";
 	}
 }
 echo "</p>\n";
echo "<p>\n";
echo "Hello World!!!";
?>