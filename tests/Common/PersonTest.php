<?php

namespace App\Tests\Common;

use PHPUnit\Framework\TestCase;
use App\Common\Person;

class PersonTest extends TestCase
{
    public function testGetName()
    {
        $person = new class('Ivan', 'Nastavnik') extends Person {
            public function sayHello(): void
            {
                echo "Hello, my name is {$this->name}\n";
            }
        };

        $this->assertEquals('Ivan', $person->getName());
    }

    public function testGetYears()
    {
        $person = new class('Ivan', 'Nastavnik') extends Person {
            public function sayHello(): void
            {
                echo "Hello, my name is {$this->name}\n";
            }
        };

        $this->assertEquals(18, $person->getYears());
    }
}