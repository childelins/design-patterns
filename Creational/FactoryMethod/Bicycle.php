<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Bicycle implements VehicleInterface
{
    public function driveTo(string $destination)
    {
        echo "i will ride a bicycle to {$destination}" . PHP_EOL;
    }
}