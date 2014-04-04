<?php 


class Fruit {

	public $name;
	public $clean;

	public function Fruit($fruitName) {
		$this->name = $fruitName;
		$this->clean = false;
	}

	public function wash() {
		$this->clean = true;
	}
}



class Cherry extends Fruit {

	public $hasStone;
	public $makesPies;

	public function Cherry ($cherryType) {
		$this->name = $cherryType . ' cherry';
		$this->hasStone = true;
		$this->makesPies = true;
	}

}

$snack = new Cherry('wild');

$snack->wash();

if ($snack->clean) {
	echo 'You get a nice clean ' . $snack->name . ' for lunch';
}
else {
	echo 'You get a ' . $snack->name . ' for lunch, but you should really wash it first!';
}

