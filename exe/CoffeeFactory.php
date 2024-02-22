<?php
class CoffeeFactory {
    public static function createCoffee($type) {
        switch ($type) {
            case 'espresso':
                return new Espresso();
            case 'cappuccino':
                return new Cappuccino();
            case 'americano':
                return new Americano();
            default:
                throw new \InvalidArgumentException("Несъществуващ вид кафе");
        }
    }
}
?>