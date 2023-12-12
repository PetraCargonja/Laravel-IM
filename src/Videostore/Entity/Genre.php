<?php

namespace App\Videostore\Entity;

class Genre
{
    public int $id_zanr;

    public string $naziv;

    public function getInfo(): string
    {
        return "ID: {$this->id_zanr}, name: {$this->naziv}";
    }
}