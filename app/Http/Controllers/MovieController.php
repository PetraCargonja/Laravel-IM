<?php

namespace App\Http\Controllers;

use App\DatabaseConnectionInterface;
use App\Http\Requests\StoreMovieRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class MovieController extends Controller
{
    public function __construct(private DatabaseConnectionInterface $connection)
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $movies = DB::table('film')->get();

        return view('movies.index')
            ->with('title', 'Popis filmova')
            ->with('movies', $movies);
    }

    public function show(int $id)
    {
        $movie = DB::table('film')
        ->leftJoin('zanr', 'film.id_zanr', '=', 'zanr.id_zanr')
        ->where('id_film', $id)
        ->select('film.*', 'zanr.naziv as genreName')
        ->first();

        if ($movie === null) {
            abort(404);
        }

        return view('movies.show')
            ->with('movie', $movie);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(StoreMovieRequest $request) 
    {
        $validated = $request->validated();

        if (!DB::table('film')->insert([
            'naziv' => $validated['name'],
            'godina' => $validated['year'],
        ])) {
            abort(500);
        }
    
        return redirect()->route('movies.index');
    }
}
