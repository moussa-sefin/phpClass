<?php
class Adress
{
    public $city;
}

class Person
{
    public $name;
    public $adress;

    public __construct($adress)
    {
        $this->$adress = new Adress();
    }
}
$p1 = new Person()


?>