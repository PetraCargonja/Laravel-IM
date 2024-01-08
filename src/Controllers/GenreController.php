<?php

namespace App\Controllers;

use App\Models\Genre;

class GenreController
{
    public function index()
    {
        $genres = new Genre();

        return $genres->findAll();
    }

    public function show()
    {
        return "Genres show";
    }
}