<?php

use Garage\Boats\Boat;
use PHPUnit\Framework\TestCase;

class BoatTest extends TestCase
{
    public function testGetDocumentation()
    {
        $obj = new Boat();
        $this->assertEquals(['move', 'refuel'], $obj->getDocumentation());
    }

    public function testMove()
    {
        $obj = new Boat();
        $this->expectOutputString('boat swim' . EOL);
        $obj->move();
    }
}
