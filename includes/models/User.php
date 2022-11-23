<?php

class User {
    private $firstName;
    private $lastName;

    public function __construct($firstName,$lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName; 
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setFirstName($firstName) : void{
        $this->firstName=$firstName;
    }

    public function setLastName($lastName) : void{
        $this->firstName=$lastName;
    }
}