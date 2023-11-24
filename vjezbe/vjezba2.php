<?php

class Car
{
    public function __construct(
        private string $manufacturer,
        private string $model,
        private string $chassisNumber,
    ){}

    public function __destruct()
    {
        echo "Automobil (broj šasije: {$this->chassisNumber}) ide na reciklažu!\n";
    }
}

$car = new Car('Volkswagen', 'Golf', '123456789');