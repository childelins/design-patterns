<?php

namespace DesignPatterns\Creational\SimpleFactory;

class SimpleFactory
{
    public static function createVehicle(string $type): VehicleInterface
    {
        switch ($type) {
            case 'bicycle':
                return new Bicycle();
            case 'car':
                return new Car();
            default:
                throw new \InvalidArgumentException('Unknown type given');
        }
    }
}
