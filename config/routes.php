<?php

use App\Controllers\GenreController;
use App\Controllers\MovieController;
use App\Core\Router;
use App\Models\Movie;

Router::get('/movies', function () {
    $movies = new Movie();

    return $movies->findAll();
});

Router::get('/movies/show', [MovieController::class, 'show']);

Router::get('/genres', [GenreController::class, 'index']);
Router::get('/genres/show', [GenreController::class, 'show']);