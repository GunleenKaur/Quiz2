<?php

class User {

    //Attributes
   private $id=0;
   private $full_name="";
   private $username="";
   private $password="";  


    //Getters
    function getID():int{
        return $this->id;

    }
    function getFullName():string{
        return $this->full_name;
    }
    function getUserName():string{
        return $this->username;
    }
    function getPassword():string{
        return $this->password;
    }
 

    //Verify the password, pass in the the hash for verification.
    function verifyPassword(string $password) {
        return password_verify($password,$this->getPassword());
        
    }
}



?>