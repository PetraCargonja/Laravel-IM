<?php

namespace College;

use Common\Person;

class Admin extends Person
{
    public function sayHello(): void
    {
        echo "Ja sam administrator \n";
    }

    public function getRole(): string
    {
        return 'admin';
    }
}