<?php 

class Beer2 extends Beverage
{
    private $name;
    private $acoholpercentage;

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

    public function showBeerInfo()
    {
        return $this->beerInfo();
    }

    private function beerInfo()
    {
        return "Hi I'm  {$this->name} and have an alcohol percentage of {$this->acoholpercentage} and I have a {$this->color} color.";
    }

}

/*Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/