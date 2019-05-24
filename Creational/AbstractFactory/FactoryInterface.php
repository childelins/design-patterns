<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface FactoryInterface
{
    public function createFridge(): FridgeInterface;

    public function createAirCondition(): AirConditionInterface; 
}