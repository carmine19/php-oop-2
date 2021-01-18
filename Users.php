<?php

class Users {


    private $name;
    public $surname;
    protected $age;
    public $email;


    function __construct($_name, $_surname, $_age, $_email) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
        $this->email = $_email;
    }


    public function setName($_name) {
        if(!is_numeric($_name)) {
            return $this->name = $_name;
        }else {
            throw new Exception('devi inserire il tuo nome');
        }
    }
    public function getName() {
        return $this->name;
    }


    public function setSurname($_surname) {
        if(!is_numeric($_surname)) {
            return $this->surname = $_surname;
        }else {
            throw new Exception('devi inserire il tuo nome');
        }
    }

    public function getSurname() {
        return $this->surname;
    }


    public function setAge($_age) {
        if(is_numeric($_age) && $_age > 18 && $_age < 90) {
            return $this->age = $_age;
        } else {
            throw new Exception('devi inserire un numero');
        }
    }
    public function getAge() {
        return $this->age;
    }

    public function getEmail() {
        return $this->email;
    }

};