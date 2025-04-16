<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="includes/signup.inc.php" method="post">
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="pwd" placeholder="password"><br>
    <button >Signup</button>


<?php

require_once 'Classes/Car.php';

$car01 = new Car("BMW", "green");
echo $car01->setBrand("Volvo");
 $car01->setColor("green") . "<br>";
 echo $car01->getColor();



?>


</body>
</html>






