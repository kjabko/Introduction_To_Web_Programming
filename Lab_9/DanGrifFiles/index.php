<?php

//bring in any extra functionality that we'll require
include('NumberGenerator.class.php');
include('Dice.class.php');


class Game {

	public $guesses = array();
	public $nextGuess;
	public $numberWereTryingToGuess;

	public function __construct() {
		$dice = new Dice();
		$dice->throwDice();

		$this->numberWereTryingToGuess = $dice->getFaceValue();
	}

	public function saveGuess($number) {
		//stub...
	}

	public function listGuesses() {
		//stub...
	}


	public function guessHandler() {
		$guess = new NumberGenerator();             //what's wrong with this?  How could we improve it?
		$this->saveGuess($guess);
		return $guess->makeAGuess();
	}

	public function play() {

		for ($i=0; $i<=2; $i++) {

			$this->nextGuess = $this->guessHandler();

			if (  $this->nextGuess ==  $this->numberWereTryingToGuess ) {

				echo "Guess number ".($i+1). " was correct!!!  Face value was " . $this->numberWereTryingToGuess . " <br/>";

				//save the correct guess to the guesses array
				$this->saveGuess($this->nextGuess);

				break;
			}
			else {

				echo 'Face Value was ' . $this->numberWereTryingToGuess . '<br/>';
				echo 'But your guess was '  . $this->nextGuess . '<br/>';
			}
		}
	}
}

//main code block
$myGame = new Game();
$myGame->play();







