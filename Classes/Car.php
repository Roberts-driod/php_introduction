<?php

class Car
{
    // Properties / Fields
    private $brand;
    private $color;
    private $vehicleType = "car";

    // Constructor
    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }
}

$car01 = new Car("Volvo", "green");
$car02 = new Car("BMW", "blue");