<?php

namespace DesignPatterns\Creational\SimpleFactory;

class Car implements VehicleInterface
{
    public function driveTo(string $destination)
    {
        echo "i will drive a car to {$destination}" . PHP_EOL;
    }
}