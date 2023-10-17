<?php
// $this keyword refers to current object, only available inside the methods

class Car
{
    public $name;

    public function setName($name)
    {
        // Assign name to the car
       $this->name = $name;
    }
}

$mercedes = new Car;
$mercedes->setName('Mercedes');

$toyota = new Car;
$toyota->setName('Toyota');

//var_dump($mercedes, $toyota);


// We have a keyword that checks if an object belongs to a class

//class Student {
//
//}
//
//$toyota = new Student;
//
//var_dump($toyota instanceof Car);
