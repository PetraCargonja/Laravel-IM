<?php

namespace Geometry;

class Circle
{
    public function __construct(private float $radius)
    {}

    public function getDiameter(): float
    {
        return $this->radius * 2;
    }

    public function getCircumference(): float
    {
        return $this->getDiameter() * Constants::PI;
    }

    public function getArea(): float
    {
        return $this->radius * $this->radius * Constants::PI;
    }
}