<?php

namespace App\Common;

class Car
{
    public function honk(): string
    {
        return "BEEP BEEP\n";
    }

    public function drive(): string
    {
        $drive = "Car is moving\n";

        return $drive;
    }
}