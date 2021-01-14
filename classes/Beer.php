<?php 

class Beer extends Beverage
{
    public $name;
    public $acoholpercentage;

   public function __construct(string $functionColor, float $functionPrice, string $functionName, float $functionAlcoholpercentage) 
    {
    parent:: __construct($functionColor, $functionPrice);
    $this->name = $functionName;
    $this->acoholpercentage = $functionAlcoholpercentage;    
    }

    public function getAlcoholpercentage() 
    {
        echo 'The alcoholpercentage of ' . $this->name . ' is '. $this->acoholpercentage . '%. </br>';
        echo 'The alcoholpercentage is ' . number_format($this->acoholpercentage, 2) . '%.';
    }
}

