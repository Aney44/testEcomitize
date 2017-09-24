<?php

use Garage\Bikes\HarleyDavidsonBike;
use PHPUnit\Framework\TestCase;

class HarleyDavidsonBikeTest extends TestCase
{
    public function testGetDocumentation()
    {
        $obj = new HarleyDavidsonBike();
        $this->assertEquals(['move', 'refuel'], $obj->getDocumentation());
    }
}
