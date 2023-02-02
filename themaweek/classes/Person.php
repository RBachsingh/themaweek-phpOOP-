<?php

namespace classes;
{
    class person
    {
        public $name;
        public $isStudent;
        public $avarageGrade;
        protected $gender;
        private $age;
        function __construct(string $name, int $age, string $gender)
        {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        echo "A new Person-object has been created" . "<br>";
        echo "The property name of this object is: $name" . "<br>";
        }
        public function setGender(string $gender){
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
         * @param mixed $isStudent
         */
        public function setIsStudent($isStudent)
        {
            $this->isStudent = $isStudent;
        }

        /**
         * @return mixed
         */
        public function getIsStudent()
        {
            return $this->isStudent;
        }

        /**
         * @param mixed $avarageGrade
         */
        public function setAvarageGrade($avarageGrade)
        {
            $this->avarageGrade = $avarageGrade;
        }

        /**
         * @return mixed
         */
        public function getAvarageGrade()
        {
            return $this->avarageGrade;
        }
        function getGegevens(){
            $Gegevens =
            "\nDe gegevens van " . $this->name . " zijn:" .
            "\nLeeftijd: " . $this->age .
            "\nGeslacht: " . $this->gender .
            "\nStudent:" . $this->IsStudent .
            "\nGemiddelde cijfer: " . $this->avarageGrade;
            return $Gegevens;
        }
        function setGegevens(){
           return $this->Gegevens;
        }
    }
}