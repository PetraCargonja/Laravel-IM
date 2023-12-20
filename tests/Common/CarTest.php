<?php

namespace App\Tests\Common;

use App\Common\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    private Car $car;
    
    protected function setUp(): void
    {
        $this->car = new Car();
    }

    public function testHonk()
    {
        $this->assertEquals("BEEP BEEP\n", $this->car->honk());
    }

    public function testDrive()
    {
        $this->assertEquals("Car is moving\n", $this->car->drive());
    }
}