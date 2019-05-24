<?php

namespace DesignPatterns\Creational\AbstractFactory;

class SamsungAirCondition implements AirConditionInterface
{
    public function cool()
    {
        echo 'Samsung air condition keep cool' . PHP_EOL;
    }
}