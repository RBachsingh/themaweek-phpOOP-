<?php

namespace classes;

class Docent extends Person
{
    private $vak;
    function __construct(string $name, int $age, string $gender, string $vak)
    {
        parent::__constructor($name, $age, $gender);
        $this->vak = $vak;
    }
    public function getInfo(): string
    {
        return $this->getName() ." ". $this->getAge() ." ". $this->getGender() ." ". "geeft " . $this->vak;
    }

    public function setInfo(): string
    {
     return $this->setName() . $this->setAge() . $this->setGender() . $this->vak;
    }

}