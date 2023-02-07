<?php

namespace classes;
class Person
{
    public $name;
    public $isStudent;
    public $averageGrade;
    protected $gender;
    private $age;

    function __construct(string $name, int $age, string $gender, bool $isStudent, float $averageGrade)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->isStudent = $isStudent;
        $this->averageGrade = $averageGrade;
        echo "A new Person-object has been created" . "<br>";
        echo "The property name of this object is: $name" . "<br>";
    }
    function __constructor(string $name, int $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param bool $isStudent
     */
    public function setIsStudent(bool $isStudent)
    {
        $this->isStudent = $isStudent;
    }

    /**
     * @return bool
     */
    public function getIsStudent()
    {
        return $this->isStudent;
    }

    /**
     * @param float $averageGrade
     */
    public function setAverageGrade($averageGrade)
    {
        $this->averageGrade = $averageGrade;
    }

    /**
     * @return float
     */
    public function getAverageGrade()
    {
        return $this->averageGrade;
    }

    function getGegevens()
    {
        $Gegevens =
            "\nDe gegevens van " . $this->name . " zijn: " .
            "\n Leeftijd: " . $this->age .
            "\n ,Geslacht: " . $this->gender .
            "\n ,Student: " . $this->isStudent .
            "\n ,Gemiddelde cijfer: " . $this->averageGrade;
        return $Gegevens;
    }

    function setGegevens()
    {

        return $this->Gegevens;
    }
}
