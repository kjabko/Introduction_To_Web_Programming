<?php

include 'RandNum.class.php';
include 'Guess.class.php';

class MyGame
{

	public $guessRecord = array();
	public $userGuessing;
	public $numbersToGuess;

	public function __construct()
	{	
		$this->guessRecord = array();
		$dice = new Dice;
		$dice->diceThrow();
		
		$this->numbersToGuess = $dice->getDice();
		
		$nGen = new NumGen;
		$this->userGuessing = $nGen->RandNum();
	}

	public function gamePlay()
	{	

		for ($i=0; $i < 3 ; $i++) { 
			
			$user = $this->userGuessing;
			
			$guessRecord[] = $user;
			foreach ( $guessRecord as $key) {
				echo "<p>". $key. "<p/>";
			}

			if($user == $this->numbersToGuess){
				echo "Guessed number ".$user." was correct!!!";
				break;
			}
			else {
				echo "Sorry it is not correct. The number you gave was ".$user.
" The right number was ".$this->numbersToGuess.".";
break;
			}

		}
	}




}


$game = new MyGame;
echo $game->gamePlay();








?>