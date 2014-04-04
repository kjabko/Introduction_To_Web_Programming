<?php

//include 'NumGenerator.class.php';
//include 'MyDice.class.php';


class Game
{
	public $saveGuesses=array();
	public $nextGuess;
	public $numberToGuess;
	
	public function __construct($host, $username, $password, $dbname)
	{
		$dice = new MyDice;
		$dice->throwDice();
		$this->numberToGuess = $dice->getFaceValue();

		$numGen = new NumGenerator;
		$this->nextGuess = $numGen->makeGuess();

		$this->saveGuesses = array($this->nextGuess);

global $data;

		$this->data = new MyDB($host, $username, $password, $dbname);
	}

	
	public function SaveEachGuess($number)
	{
		
		$this->data->InsertGuess(2, $this->nextGuess); 
		
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






?>