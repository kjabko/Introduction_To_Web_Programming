<?php 


class Fruit {

	public $name;
	public $washed;

	public function Fruit($fruitName) {
		$this->name = $fruitName;
		$this->washed = 0;
	}

	public function wash() {
		$this->washed ++;
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


class Apple extends Fruit {

	public $hasSeeds;
	public $makesPies;

	public function Apple ($appleType) {
		$this->name = $appleType . ' apple';
		$this->hasSeeds = true;
		$this->makesPies = true;
	}
}


$snack1 = new Cherry('wild');
$snack2 = new Apple('granny Smith');

$snack1->wash();
$snack1->wash();
$snack2->wash();

echo $snack1->name . ' was washed ' . $snack1->washed . ' times. <br/>';
echo $snack2->name . ' was washed ' . $snack2->washed . ' times. <br/>';


