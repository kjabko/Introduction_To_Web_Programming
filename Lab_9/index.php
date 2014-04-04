<?php

include 'NumGenerator.class.php';
include 'MyDice.class.php';


class Game
{
	public $saveGuesses=array();
	public $nextGuess;
	public $numberToGuess;

	public function __construct()
	{
		$dice = new MyDice;
		$dice->throwDice();
		$this->numberToGuess = $dice->getFaceValue();

		$numGen = new NumGenerator;
		$this->nextGuess = $numGen->makeGuess();

		$this->saveGuesses = array($this->nextGuess);
	}

	
	public function SaveEachGuess()
	{
		$saveGuess = $this->saveGuesses;
		return $saveGuess;
	}

	public function Play()
	{

	for ($i=1; $i <= 3 ; $i++) 
	{ 
	  $userGuess = $this->nextGuess;
	  $generatedNums = $this->numberToGuess;

	if ($userGuess == $generatedNums) 
	{
	echo "Guessed number ".$i." was correct!!!";
	break;
	}
	else {echo "Sorry this is not correct. The number you gave was ".$userGuess.
		"<br>The right number was ".$generatedNums.".";
	break;
	}
	
	}

	}

}

$object = new Game;
$object->Play();
$guess = $object->SaveEachGuess();

//foreach ($guess as $key) {
//	echo $key;
//};





?>