<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = new Genre();

        return $genres->findAll();
    }

    public function show()
    {
        return $this->render('show', [
            'pageName' => $_GET['pageName'] ?? 'Žanrovi',
            'nameTitle' => 'Naziv žanra',
        ]);
    }
}