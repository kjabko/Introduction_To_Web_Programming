<?php

$sentence = "Hi Adecka!!! How are you today? Bai!!!";
$numberOfCharacters = strlen($sentence);

$index= 0;
$wordCount= 0; $dupa=2;

while ($index < $numberOfCharacters) 
{  

	
	while ($index < $numberOfCharacters && $sentence{$index} == ' ') 
		{
			$index++;
		}
while ($index < $numberOfCharacters && $sentence{$index} != ' ')
		{
			$index++;
		}

$wordCount++;
}

if ($sentence{$numberOfCharacters-1} == ' ')
{$wordCount--;}

print_r("The sentence has ". $wordCount. " words.");


?>