<?php

namespace DesignPatterns\Creational\AbstractFactory;

class GreeAirCondition implements AirConditionInterface
{
    public function cool()
    {
        echo 'Gree air condition keep cool' . PHP_EOL;
    }
}