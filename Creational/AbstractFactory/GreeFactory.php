<?php

namespace DesignPatterns\Creational\AbstractFactory;

class GreeFactory implements FactoryInterface
{
    public function createFridge(): FridgeInterface
    {
        return new GreeFridge();
    }

    public function createAirCondition(): AirConditionInterface
    {
        return new GreeAirCondition();
    }
}