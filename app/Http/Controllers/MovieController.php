<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Genre;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index')
            ->with('title', 'Popis filmova')
            ->with('movies', $movies);
    }

    public function show(int $id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.show')
            ->with('movie', $movie);
    }

    public function create()
    {
        return view('movies.create', [
            'genres' => Genre::all(),
        ]);
    }

    public function store(StoreMovieRequest $request) 
    {
        $validated = $request->validated();

        $movie = new Movie();
        $movie->naziv = $validated['name'];
        $movie->godina = $validated['year'];
        $movie->id_zanr = $validated['genre'];
        $movie->save();
    
        return redirect()->route('movies.index');
    }

    public function destroy(int $id)
    {
        Movie::destroy($id);

        return redirect()->route('movies.index');
    }
}
