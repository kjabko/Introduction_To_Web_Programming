<?php

// include all the code at is in Sphere.class.php

include('Sphere.class.php');

class Shapes {

	/*

	@file : Shapes.class.php
	@author : DG
	@date : 20.11.13


	A class to work with Shapes

	*/



	public function __construct() {
		//this is why we call it a magic method - we want the Shapes class to automatically instantiate a Sphere so we do that here in the Shapes constructor

		$mySphere = new Sphere();


		// a very simplified example
		$mySphere->setRadius(4);

		echo $mySphere->getArea();


	}


}

//instantiate Shapes... this will in turn instantiate Sphere for us and do a very simple echo
$myShapeFactory = new Shapes();


?>