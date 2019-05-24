<?php

namespace DesignPatterns\Creational\FactoryMethod;

class BicycleFactory implements FactoryInterface
{
    public function createVehicle(): VehicleInterface
    {
        return new Bicycle();
    }
}