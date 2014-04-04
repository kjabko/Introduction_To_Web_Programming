<?php

class Sphere {

	/*

	@file : Sphere.class.php
	@author : DG
	@date : 20.11.13


	A class to generate Spheres


	We need to define our 4/3 constant.  Apologies, I mislead you with the lecture notes.  It seems we can't assign an expression to a constant within a class.
	If we were working outside of a class, we could do this fine 

	define (FOUR_THIRDS, 4/3);

	However this isn't possible with a class constant...  so the following gives and error

	const FOUR_THIRDS = 4/3;

	The workaround is either to use 1.33, or to load a variable first and then assign that to the constant.

	*/



	//constants
	const PI = 3.14;                      // these two declarations throw a PHP notice on my local server but execute fine... can anyone confirm this?  Lets talk in the lab.
	const FOUR_THIRDS = 1.33;			  // these two declarations throw a PHP notice on my local server but execute fine... can anyone confirm this?  Lets talk in the lab.

	//data members
	private $radius;

	//our constructor
	public function __construct() {
		//just a stub for now....
	}



	//our setter methods

	public function setRadius($newRadiusValue) {

		//using $this->radius to refer to the global $radius... $newRadiusValue is a local copy of the value that we've passed into this method.  We use it to update the global vlaue

		$this->radius = $newRadiusValue;
	}


	//our getter methods
	public function getArea() {

		//we are using $this->radius so that we don't need to pass $radius into this method.  Remember that $radius is private - we can't see it from outside this class

		return (4 * self::PI  * ( $this->radius )  * ( $this->radius ));
	}

	public function getVolume() {

		//we are using $this->radius so that we don't need to pass $radius into this method.  Remember that $radius is private - we can't see it from outside this class

		//notice the way we reference a clas constant using self::CONSTANT_NAME

		return  self::FOUR_THIRDS * self::PI * ( $this->radius )  * ( $this->radius );
	}


	public function getDiameter() {

		//we are using $this->radius so that we don't need to pass $radius into this method.  Remember that $radius is private - we can't see it from outside this class

		return (( $this->radius )  * 2);
	}

}


//here is the code that we're removing and redoing in our second class - ie. 7.4 in the lab
//we want to instantiate this class above in the other class...

/*

$s=new Sphere;

$s->setRadius(3);

echo $s->getVolume();


*/


?>