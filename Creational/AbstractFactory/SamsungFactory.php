<?php

namespace DesignPatterns\Creational\AbstractFactory;

class SamsungFactory implements FactoryInterface
{
    public function createFridge(): FridgeInterface
    {
        return new SamsungFridge();
    }

    public function createAirCondition(): AirConditionInterface
    {
        return new SamsungAirCondition();
    }
}