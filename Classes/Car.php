<?php

class Car
{
    // Properties / Fields
    private $brand;
    private $color;
   

    // Constructor
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }
// Getter and Setter methods
    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $allowedColors = ["red", "green", "blue", "yellow"];
        if (!in_array($color, $allowedColors)) {
            $this->color = $color;
        }
       
    }

    // Method

    public function getCarInfo()
    {
        return "Brand: " . $this->brand . ' Color: ' . $this->color;
    }
}

$car01 = new Car("Volvo", "green");
echo $car01->getCarInfo() . "<br>";
