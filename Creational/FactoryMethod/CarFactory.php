<?php

namespace DesignPatterns\Creational\FactoryMethod;

class CarFactory implements FactoryInterface
{
    public function createVehicle(): VehicleInterface
    {
        return new Car();
    }
}