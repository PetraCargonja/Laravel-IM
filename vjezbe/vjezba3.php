<?php

interface VehicleInterface
{
    public function turnOn(): void;

    public function turnOff(): void;
}

abstract class Car implements VehicleInterface
{
    public function turnOn(): void
    {
        echo "Car is turned on \n";
    }

    public function turnOff(): void
    {
        echo "Car is turned off \n";
    }

    abstract public function getMilage(): int;
}

class Audi extends Car
{
    public function turnOn(): void
    {
        echo "Audi is turned on \n";
    }

    public function turnOff(): void
    {
        echo "Audi is turned off \n";
    }

    public function getMilage(): int
    {
        return 800;
    }
}

class Toyota extends Car
{
    public function getMilage(): int
    {
        return 1000;
    }
}

class Ship implements VehicleInterface
{
    public function turnOn(): void
    {
        echo "Ship is turned on \n";
    }

    public function turnOff(): void
    {
        echo "Ship is turned off \n";
    }
}

$audi = new Audi();
$toyota = new Toyota();

$audi->turnOn();
$audi->turnOff();

$toyota->turnOn();
$toyota->turnOff();

$ship = new Ship();
$ship->turnOn();
$ship->turnOff();