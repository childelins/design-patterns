<?php

namespace DesignPatterns\Creational\FactoryMethod;

interface FactoryInterface
{
    public function createVehicle(): VehicleInterface;
}