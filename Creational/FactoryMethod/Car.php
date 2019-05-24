<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Car implements VehicleInterface
{
    public function driveTo(string $destination)
    {
        echo "i will drive a car to {$destination}" . PHP_EOL;
    }
}