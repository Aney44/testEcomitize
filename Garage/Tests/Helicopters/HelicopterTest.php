<?php

use Garage\Helicopters\Helicopter;
use PHPUnit\Framework\TestCase;

class HelicopterTest extends TestCase
{
    public function testGetDocumentation()
    {
        $obj = new Helicopter();
        $this->assertEquals(['move', 'refuel'], $obj->getDocumentation());
    }

    public function testMove()
    {
        $obj = new Helicopter();
        $expectedString = 'helicopter takeOff' . EOL;
        $expectedString .= 'helicopter fly' . EOL;
        $expectedString .= 'helicopter landing' . EOL;
        $this->expectOutputString($expectedString);
        $obj->move();
    }

    public function testTakeOff()
    {
        $obj = new Helicopter();
        $this->expectOutputString('helicopter takeOff' . EOL);
        $obj->takeOff();
    }

    public function testFly()
    {
        $obj = new Helicopter();
        $this->expectOutputString('helicopter fly' . EOL);
        $obj->fly();
    }

    public function testLanding()
    {
        $obj = new Helicopter();
        $this->expectOutputString('helicopter landing' . EOL);
        $obj->landing();
    }
}
