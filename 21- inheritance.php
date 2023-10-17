<?php

class Product
{
    protected $id;

    public $name;

    private $barCode;

    public function printWelcome()
    {
        echo "This is from inside the product class";
    }
}

class Car extends Product{

}

class MyProduct extends Product
{
    // $id; => protected
    // $name => public;
    // $barcode => will not be inherited because it is private

    // Method Overriding
    public function printWelcome()
    {
        echo "This is from inside the my product class";
    }
}

$record = new MyProduct;
$record->printWelcome();
echo "<br/>";
echo $record->barCode;

// only public and protected properties/methods will be inherited.

// Multiple inheritance is not allowed

// The final keyword => prevent inheritance or method overriding

//final class A {
//
//}
//
//class B extends A
//{
//
//}

class A {
    final function printName()
    {
        echo "Name from class A";
    }
}

class B extends A
{
    function printName()
    {
        echo "Name from class B";
    }
}

$object = new B;
$object->printName();


// Overloading => not allowed on php
//function myFunction()
//{
//    ///
//}
//
//function myFunction($a, $b)
//{
//
//}
//
//myFunction();
//myFunction(1, 2);
