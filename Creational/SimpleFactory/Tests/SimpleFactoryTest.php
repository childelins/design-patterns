<?php

namespace DesignPatterns\Creational\SimpleFactory\Tests;

use DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use DesignPatterns\Creational\SimpleFactory\Bicycle;
use DesignPatterns\Creational\SimpleFactory\Car;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $vehicle = SimpleFactory::createVehicle('bicycle');
        $vehicle->driveTo('Paris');

        $this->assertInstanceOf(Bicycle::class, $vehicle);
    }

    public function testCanCreateCar()
    {
        $vehicle = SimpleFactory::createVehicle('car');
        $vehicle->driveTo('Paris');

        $this->assertInstanceOf(Car::class, $vehicle);
    }

    /**
     * @expectException \InvalidArgumentException
     */
    public function testException()
    {
        SimpleFactory::createVehicle('object');
    }
}
