<?php
class Player
{

  // Player class - all information being tracked for a player on the soccer team
    public $jerseynumber;
    public $firstName;
    public $lastName;
    public $address;
    public $city;
    public $state;
    public $zipcode;
    public $UniformSize;

    public function __construct(array $newPerson){
        $this->setJerseyNumber($newPerson["jerseynumber"]);
        $this->setFirstName($newPerson["firstName"]);
        $this->setLastName($newPerson["lastName"]);
        $this->setaddress($newPerson["address"]);
        $this->setCity($newPerson["city"]);
        $this->setState($newPerson["state"]);
        $this->setZipCode($newPerson["zipcode"]);
        $this->setUniformSize($newPerson["UniformSize"]);
    }

    public function setJerseyNumber($newJerseyNumberIn){
        $this->jerseynumber = $newJerseyNumberIn;
    }

    public function getJerseyNumber(){
        return $this->jerseynumber;
    }

    public function setFirstName($newFirstNameIn){
        $this->firstName = $newFirstNameIn;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setLastName($newLastNameIn){
        $this->lastName = $newLastNameIn;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setAddress($newAddressIn){
        $this->address = $newAddressIn;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setCity($newCityIn){
        $this->city = $newCityIn;
    }
    public function getCity(){
        return $this->city;
    }
    public function setState($newStateIn){
        $this->state = $newStateIn;
    }
    public function getState(){
        return $this->state;
    }

    public function setZipCode($newZipCodeIn){
        $this->zipcode = $newZipCodeIn;
    }
    public function getZipCode(){
        return $this->zipcode;
    }
    public function setUniformSize($newUniformSizeIn){
        $this->UniformSize = $newUniformSizeIn;
    }

    public function getUniformSize(){
        return $this->UniformSize;
    }

}
?>
