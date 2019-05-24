<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle(): BuilderInterface;

    public function addWheel(): BuilderInterface;

    public function addEngine(): BuilderInterface;

    public function addDoors(): BuilderInterface;

    public function getVehicle(): Vehicle;
}