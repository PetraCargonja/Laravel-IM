<?php

class Person
{
    public string $name;

    public function getName()
    {
        return $this->name;
    }
}

$person = new Person();
$person->name = 'John';

echo $person->getName() . "\n";
echo $person->name . "\n";
