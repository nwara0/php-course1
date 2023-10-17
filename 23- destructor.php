<?php

// Is Called when the object is destructed or  when the script ends or exited

class Car
{
    public $color;
    public $type;
    private $model;
    private $seats;

    function __construct($type, $model)
    {
        $this->type = $type;
        $this->model = $model;
    }

    function __destruct()
    {
//        echo "This line is from inside the destructor";
    }

    function __set($name, $value)
    {
//        if ($name === 'seats' && $value > 5) {
//            $this->seats = $value;
//        }
        $this->$name = $value;
    }

    function __get($name)
    {
        if ($name === 'x') {
            return 20;
        }
    }
}

$newCar = new Car('BMW', 2000);
//$newCar->seats = 10;
//$newCar->speed = 1000;

var_dump($newCar->x);


//var_dump($newCar);
