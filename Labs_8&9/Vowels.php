<?php
$home = 'Stratocirrus';


$numberOfCharacter = strlen($home);
$vowelCount = 0;

for ($i=0; $i < $numberOfCharacter ; $i++) { 
$letter = $home{$i};
	echo $letter;
if ( $letter == 'a' || $letter == 'A' || $letter == 'e'||
	$letter == 'E' || $letter == 'i' || $letter == 'I'||
	$letter == 'o' || $letter == 'O' || $letter == 'u'||
	$letter == 'U') 
{
	$vowelCount++;
}

}

print ($home . ", your name has ". $vowelCount. " vowels");









?>