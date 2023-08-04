<?php

class Car {

    //Attributes

    private $year;
    private $make="";
    private $model="";
    private $price;

    

    //Getters
    
    function getYear():int{
        return $this->year;
    }

    function getMake():string{
        return $this->make;
    }
    function getModel():string{
        return $this->model;
    }
    function getPrice():int{
        return $this->price;
    }
    
}



?>