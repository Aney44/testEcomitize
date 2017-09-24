<?php

namespace Garage\Tests\Common;

use Garage\Cars\BmwCar;
use Garage\Common\FmRadio;
use PHPUnit\Framework\TestCase;

class BmwCarTest extends TestCase
{
    public function testGetName()
    {
        $obj = new BmwCar();
        $this->assertEquals('bmw', $obj->getName());
    }

    public function testGetDocumentation()
    {
        $obj = new BmwCar();
        $this->assertEquals(['move', 'musicOn', 'refuel'], $obj->getDocumentation());
    }

    public function testMusicOnNoRadio()
    {
        $obj = new BmwCar();
        $this->expectOutputString('');
        $obj->musicOn();
    }

    public function testMusicOnWithRadio()
    {
        $obj = new BmwCar(['radio' => FmRadio::class]);
        $this->expectOutputString('    music switched on ' . EOL);
        $obj->musicOn();
    }

    public function setRadioProvider()
    {
        return [
            'path to class' => [FmRadio::class],
            'instance of class' => [new FmRadio()]
        ];
    }

    /**
     * @dataProvider setRadioProvider
     */
    public function testSetRadio($radio)
    {
        $obj = new BmwCar();
        $obj->setRadio($radio);
        //no exception - all work fine
        $this->assertTrue(true);
    }

    public function setRadioExceptionProvider()
    {
        return [
            ['\not\exists\path'],
            [new \stdClass()]
        ];
    }

    /**
     * @dataProvider setRadioExceptionProvider
     * @expectedException \Garage\Exceptions\NotRadioException
     */
    public function testSetRadioException($radio)
    {
        $obj = new BmwCar();
        $obj->setRadio($radio);
    }
}
