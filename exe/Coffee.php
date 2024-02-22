<?php

$coffeeType = 'espresso'; 
$coffee = CoffeeFactory::createCoffee($coffeeType);

$coffee->grindCoffee();
$coffee->makeCoffee();
$coffee->pourIntoCup();

?>