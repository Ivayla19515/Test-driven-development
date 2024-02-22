<?php
abstract class Coffee {
    public function grindCoffee() {
        echo "Смилане на кафе на зърна \n";
    }

    abstract public function makeCoffee();

    public function pourIntoCup() {
        echo "Кафето се налива в чашата \n";
    }
}
?>