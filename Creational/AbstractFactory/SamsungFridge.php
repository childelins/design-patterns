<?php

namespace DesignPatterns\Creational\AbstractFactory;

class SamsungFridge implements FridgeInterface
{
    public function fresh()
    {
        echo 'Samsung fridge keep fresh' . PHP_EOL;
    }
}