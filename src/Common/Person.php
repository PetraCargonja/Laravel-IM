<?php

namespace App\Common;

use App\College\OnlineRoomConnectable;

abstract class Person implements OnlineRoomConnectable
{
    public function __construct(
        protected string $name, 
        protected string $description,
        protected int $years = 18,
        ) 
    {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getYears(): int
    {
        return $this->years;
    }

    abstract public function sayHello(): void;

    public function getDescription(): string
    {
        return $this->description;
    }
}