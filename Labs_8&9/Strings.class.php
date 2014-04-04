<?php

class Strings 
{

private $string;

public function setString($string)
{
	$this->string = $string;
}

public function getUpperString()
{
	return strtoupper($this->string);
}

public function getLowerString()
{
	return strtolower($this->string);
}

}

$object1 = new Strings;
$object1->setString('Cumulonibus');
print_r($object1->getUpperString());
echo "<p/>";
$object2 = new Strings;
$object2->setString('STRATOCUMULS');
print_r($object2->getLowerString());

















?>