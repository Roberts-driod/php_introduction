<?php

class Car
{
    // Properties / Fields
    private $brand;
    private $color;
    private $vehicleType = "car";

    // Constructor
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }
}

$car01 = new Car("Volvo", "green");
echo $car01->$vehicleType;