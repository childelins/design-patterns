<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\FactoryMethod\BicycleFactory;
use DesignPatterns\Creational\FactoryMethod\CarFactory;
use DesignPatterns\Creational\FactoryMethod\Bicycle;
use DesignPatterns\Creational\FactoryMethod\Car;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $factory = new BicycleFactory();
        $vehicle = $factory->createVehicle();
        $vehicle->driveTo('Paris');

        $this->assertInstanceOf(Bicycle::class, $vehicle);
    }

    public function testCanCreateCar()
    {
        $factory = new CarFactory();
        $vehicle = $factory->createVehicle();
        $vehicle->driveTo('Paris');

        $this->assertInstanceOf(Car::class, $vehicle);
    }
}
