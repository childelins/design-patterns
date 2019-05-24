<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Parts\Truck;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    public function addDoors(): BuilderInterface
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());

        return $this;
    }

    public function addEngine(): BuilderInterface
    {
        $this->truck->setPart('truckEngine', new Engine());

        return $this;
    }

    public function addWheel(): BuilderInterface
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());

        return $this;
    }

    public function createVehicle(): BuilderInterface
    {
        $this->truck = new Truck();

        return $this;
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}