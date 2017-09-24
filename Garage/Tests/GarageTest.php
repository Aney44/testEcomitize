<?php

use Garage\Cars\BmwCar;
use Garage\Cars\KamazCar;
use Garage\Garage;
use PHPUnit\Framework\TestCase;

class GarageTest extends TestCase
{
    /**
     * @expectedException \Garage\Exceptions\NoVehicleException
     */
    public function testGetException()
    {
        $obj = new Garage();
        $obj->get('test');
    }

    public function getProvider()
    {
        return [
            ['bmw', BmwCar::class],
            ['kamaz', KamazCar::class],
        ];
    }

    /**
     * @dataProvider getProvider
     * @param $vehicleName
     * @param $expectedInstance
     */
    public function testGet($vehicleName, $expectedInstance)
    {
        $obj = new Garage();
        $this->assertInstanceOf($expectedInstance, $obj->get($vehicleName));
    }

    public function testDemonstrateAll()
    {
        $expectedString = 'bmw moving' . EOL;
        $expectedString .= '    music switched on ' . EOL;
        $expectedString .= 'bmw refuel gas' . EOL;
        $expectedString .= 'kamaz moving' . EOL;
        $expectedString .= 'kamaz put Loads' . EOL;
        $expectedString .= 'kamaz empty Loads' . EOL;
        $expectedString .= 'kamaz refuel diesel' . EOL;
        $expectedString .= 'harley-davidson moving' . EOL;
        $expectedString .= 'harley-davidson refuel petrol' . EOL;
        $expectedString .= 'boat swim' . EOL;
        $expectedString .= 'boat refuel gas' . EOL;
        $expectedString .= 'helicopter takeOff' . EOL;
        $expectedString .= 'helicopter fly' . EOL;
        $expectedString .= 'helicopter landing' . EOL;
        $expectedString .= 'helicopter refuel gas' . EOL;
        $this->expectOutputString($expectedString);

        $obj = new Garage();
        $obj->demonstrateAll();

    }
}
