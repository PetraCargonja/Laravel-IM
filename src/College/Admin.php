<?php

namespace App\College;

use App\Common\Person;

class Admin extends Person
{
    public function sayHello(): void
    {
        echo "Moje ime je {$this->name} i ja sam vas administrator \n";
    }

    public function getRole(): string
    {
        return 'admin';
    }
}