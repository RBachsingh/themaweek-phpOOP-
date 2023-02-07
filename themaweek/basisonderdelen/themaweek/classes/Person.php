<?php

namespace classes;
class Person
{
    public $name;
    private $age;
    protected $gender;
    public $isStudent;
    public $averageGrade;
    function __construct(string $name, int $age, string $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        echo "A new Person-object has been created" . "<br>";
        echo "The property name of this object is: $name" . "<br>";
    }
}