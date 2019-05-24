<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Parts\Car;

class CarBuilder implements BuilderInterface
{
    private $car;

    public function addDoors(): BuilderInterface
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());

        return $this;
    }

    public function addEngine(): BuilderInterface
    {
        $this->car->setPart('engine', new Engine());

        return $this;
    }

    public function addWheel(): BuilderInterface
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());

        return $this;
    }

    public function createVehicle(): BuilderInterface
    {
        $this->car = new Car();

        return $this;
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}