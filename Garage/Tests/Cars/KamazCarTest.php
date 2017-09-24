<?php

namespace Garage\Tests\Common;

use Garage\Cars\KamazCar;
use PHPUnit\Framework\TestCase;

class KamazCarTest extends TestCase
{
    public function testGetDocumentation()
    {
        $obj = new KamazCar();
        $this->assertEquals(['move', 'putLoads', 'emptyLoads', 'refuel'], $obj->getDocumentation());
    }

    public function testPutLoads()
    {
        $obj = new KamazCar();
        $this->expectOutputString('kamaz put Loads' . EOL);
        $obj->putLoads();
    }

    public function testEmptyLoads()
    {
        $obj = new KamazCar(['hasLoads' => true]);
        $this->expectOutputString('kamaz empty Loads' . EOL);
        $obj->emptyLoads();
    }

    /**
     * @expectedException \Garage\Exceptions\NoLoadsExceptions
     */
    public function testEmptyLoadsException()
    {
        $obj = new KamazCar();
        $obj->emptyLoads();
    }
}
