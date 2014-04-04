<?php


class MySphere
{  
	 public $volume;
	 public $radius;
     public $circumference;
     public $diameter;

	 const pi = 3.14;
	 const FOUR_THIRD = 1.33;
	
	public function __construct()
	{
		//Set the diameter
		$this->diameter = $diameter;
		//Calculate the radius
		$this->radius = ($diameter / 2);
		//Calculate circumference of the sphere
		$this->circumference = $this->calcCircumference($radius);
		//Using the diameter, calculate the volume and circumference
		$this->volume = $this->calcVolume($diameter);

	}

public function setRadius($newRadiusValue){

	$this->radius = $newRadiusValue;
}
public function calcCircumference() {

return ((2 * pi()) * ($this->radius));
}

public function calcVolume()
{
	return ((pi() * pow($this->diameter, 3)) / 6);
}

public function AreaOfTheShape(){

	return (4 * self :: pi()) * pow($this->radius, 2);
}
public function Volume() {
	(self :: FOUR_THIRD * self :: pi()) * pow($this->radius, 3);

}

}

$object = new MySphere;
$object2 = new MySphere;
$s = new MySphere;
$s->setRadius(10);
echo $object->AreaOfTheShape();
echo $object2->Volume();











?>