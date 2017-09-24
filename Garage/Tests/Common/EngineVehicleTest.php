<?php

namespace Garage\Tests\Common;

use Garage\Interfaces\FuelInterface;
use PHPUnit\Framework\TestCase;

use Garage\Common\EngineVehicle;

class EngineVehicleTest extends TestCase
{
    public function constructProvider()
    {
        return [
            'empty construct params' => [[[]], ''],
            'unexists construct params' => [[['names' => 'test']], ''],
            'construct params name set' => [[['name' => 'test']], 'test'],
        ];
    }

    /**
     * @dataProvider constructProvider
     */
    public function testConstruct($constructorParams, $nameExpected)
    {
        $mock = $this->getMock($constructorParams);
        $this->assertEquals($nameExpected, $mock->getName());
    }

    public function moveProvider()
    {
        return [
            'empty construct params' => [[[]], ' moving' . EOL],
            'constructparams name set' => [[['name' => 'test']], 'test moving' . EOL],
        ];
    }

    /**
     * @dataProvider moveProvider
     */
    public function testMove($constructorParams, $expectedOutput)
    {
        $mock = $this->getMock($constructorParams);
        $this->expectOutputString($expectedOutput);
        $mock->move();
    }

    public function refuelProvider()
    {
        return [
            'empty construct param, default fuel' => [[[]], null, ' refuel gas' . EOL],
            'empty construct params, gas fuel' => [[[]], FuelInterface::GAS_FUEL, ' refuel gas' . EOL],
            'empty construct params, diesel fuel' => [[[]], FuelInterface::DIESEL_FUEL, ' refuel diesel' . EOL],
            'empty construct params, petrol fuel' => [[[]], FuelInterface::PETROL_FUEL, ' refuel petrol' . EOL],
            'construct params name, set default fuel' => [[['name' => 'test']], null, 'test refuel gas' . EOL],
            'construct params name, set gas fuel' => [[['name' => 'test']], FuelInterface::GAS_FUEL, 'test refuel gas' . EOL],
            'construct params name, set diesel fuel' => [[['name' => 'test']], FuelInterface::DIESEL_FUEL, 'test refuel diesel' . EOL],
            'construct params name, set petrol fuel' => [[['name' => 'test']], FuelInterface::PETROL_FUEL, 'test refuel petrol' . EOL],
        ];
    }

    /**
     * @dataProvider refuelProvider
     */
    public function testRefuel($constructorParams, $fuel, $expectedOutput)
    {
        $mock = $this->getMock($constructorParams);
        $this->expectOutputString($expectedOutput);
        if ($fuel === null) {
            $mock->refuel();
        } else {
            $mock->refuel($fuel);
        }
    }

    /**
     * @param $constructorParams
     * @return EngineVehicle
     */
    private function getMock($constructorParams)
    {
        $mock = $this->getMockBuilder(EngineVehicle::class)
            ->setConstructorArgs($constructorParams)
            ->getMockForAbstractClass();
        $mock->expects($this->any())
            ->method('getDocumentation')
            ->willReturn([]);

        return $mock;
    }
}
