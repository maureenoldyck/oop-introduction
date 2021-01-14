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
        return 'The alcoholpercentage of ' . $this->name . ' is '. $this->acoholpercentage . '%.';
    }
}

