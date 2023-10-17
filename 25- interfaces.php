<?php

// Interfaces => declare methods to implement
// Contract

interface Document
{
    public function method1();

    public function method2();
}

interface Database
{
    public function connect();

    public function disconnect();

    public function prepareQuery();
}

/*
 * Cannot have properties(data members)
 * We cannot add implemented methods
 * All functions must be public (in abstract we can have public or protected)
 * All methods inside the interface are abstract by default
 * Interfaces are implemented but abstract classes can be extended
 * */

abstract  class Student implements Document, Database
{
    public function method1() {
        // code 1
    }

    public function method2() {

    }

    public function connect()
    {

    }

    public function disconnect()
    {

    }

    abstract public function prepareQuery();
}

class User implements Document
{
    public function method1() {
        // code 2
    }

    public function method2() {

    }
}
