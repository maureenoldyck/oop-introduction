<?php

class Beverage
{
   var $color;
   var $price;
   var $temperature; 

   function __construct(string $functionColor, float $functionPrice, string $functionTemperature = 'cold') 
   {
    $this->color = $functionColor;
    $this->price = $functionPrice;
    $this->temperature = $functionTemperature;
    }
   
   function getInfo() 
   {
    return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.';
   }

}

