<?php

require_once 'Users.php';

class Payment_user extends Users {

   private $discount;

   function __construct($_name, $_surname, $_age, $_email, $_discount) {
       parent::__construct($_name, $_surname, $_age, $_email);
       $this->discount = $_discount;
   }

   public function setDisconut($_discount) {
       if($this->age > 60) {
           $this->discount = 30;
       }else {
           $this->discount = 0;
       }
   }

}


