<?php

namespace App\Http\Controllers;


class GenreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return [
            'Drama', 'Comedy', 'Action'
        ];
    }
}
