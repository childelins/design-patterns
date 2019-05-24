<?php

namespace DesignPatterns\Creational\AbstractFactory;

class GreeFridge implements FridgeInterface
{
    public function fresh()
    {
        echo 'Gree fridge keep fresh' . PHP_EOL;
    }
}