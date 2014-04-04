<?php

//bring in any extra functionality that we'll require
include('NumberGenerator.class.php');
include('Dice.class.php');


//main code block

$dice = new Dice();
$guess = new NumberGenerator();

$dice -> throwDice();

$numberWereTryingToGuess = $dice -> getFaceValue();

for ($i=0; $i<=2; $i++) {
//three guesses...

	$nextGuess = $guess -> makeAGuess();
	

	if (  $nextGuess ==  $numberWereTryingToGuess ) {

		echo "Guess number ".($i+1). " was correct!!! <br/>";
		break;
	}
	else {

		echo 'FV was ' . $numberWereTryingToGuess . '<br/>';
		echo 'guess was'  . $nextGuess . '<br/>';
	}


}




//load up three guesses from the user.  For the moment we are just pulling all three from the querystring at the same time... lets keep it simple for now


/*
$guess1 = $_GET['guess1'];
$guess2 = $_GET['guess2'];
$guess3 = $_GET['guess3'];

print "Welcome to the Dice guessing program.  Thanks for your guesses, lets see how you did...  <br/>";

$dice -> throwDice();

switch ($dice->getFaceValue()) {

	case $guess1:
		echo "Guess number one was correct!!!";
	case $guess2:
		echo "Guess number two was correct!!!";
	case $guess2:
		echo "Guess number three was correct!!!";
	default:
		echo "Sorry, you didn't make any correct guesses!";
}
*/