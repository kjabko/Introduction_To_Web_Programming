<?php

class Apple {

private $radius = 100;


public function __construct ($radius)
{
	$this->radius = $radius;

}
public function getTheRadius() 
{
	return $this->radius;

}
}

$object = new Apple('12');

echo $object->getTheRadius();







?>