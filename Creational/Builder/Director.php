<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

class Director
{
    public function build(BuilderInterface $builder): Vehicle 
    {
        return $builder->createVehicle()
            ->addDoors()
            ->addEngine()
            ->addWheel()
            ->getVehicle();
    }
}