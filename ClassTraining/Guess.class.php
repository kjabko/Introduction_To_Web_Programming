<?php


class Dice
{

	private $diceValue;

	public function diceThrow()
	{
	$this->diceValue = rand(1, 10);
	}

	public function getDice()
	{
		return $this->diceValue;
	}



}












?>