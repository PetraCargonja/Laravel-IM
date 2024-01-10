<?php

namespace App\Controllers;

use App\Core\Controller;

class MovieController extends Controller
{
    public function show()
    {
        return $this->render('show', [
            'pageName' => $_GET['pageName'] ?? 'Filmovi',
            'nameTitle' => 'Ime filma',
        ]);
    }
}