<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\SamsungFactory;
use DesignPatterns\Creational\AbstractFactory\SamsungFridge;
use DesignPatterns\Creational\AbstractFactory\SamsungAirCondition;
use DesignPatterns\Creational\AbstractFactory\GreeFactory;
use DesignPatterns\Creational\AbstractFactory\GreeFridge;
use DesignPatterns\Creational\AbstractFactory\GreeAirCondition;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateSamsungProducts()
    {
        $factory = new SamsungFactory();
        $fridge = $factory->createFridge();
        $airCondition = $factory->createAirCondition();

        $this->assertInstanceOf(SamsungFridge::class, $fridge);
        $this->assertInstanceOf(SamsungAirCondition::class, $airCondition);
    }

    public function testCanCreateGreeProducts()
    {
        $factory = new GreeFactory();
        $fridge = $factory->createFridge();
        $airCondition = $factory->createAirCondition();

        $this->assertInstanceOf(GreeFridge::class, $fridge);
        $this->assertInstanceOf(GreeAirCondition::class, $airCondition);
    }
}
