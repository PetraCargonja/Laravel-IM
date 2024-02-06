<?php

namespace App\Http\Controllers;

use App\DatabaseConnectionInterface;
use App\Http\Requests\StoreMovieRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MovieController extends Controller
{
    public function __construct(private DatabaseConnectionInterface $connection)
    {
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        $view = View::first(['movies.admin.index', 'movies.index']);
        $title = 'Popis filmova';

        if (View::exists('movies.admin.index')) {
            $title = 'Admin - ' . $title;
        }

        return $view
            ->with('title', $title)
            ->with('movies', ['Vlak u snijegu', 'Godzilla', 'Titanic']);
    }

    public function show(Request $request, int $id)
    {
        return redirect()->action([MovieController::class, 'index']);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(StoreMovieRequest $request) 
    {
        $validated = $request->validated();

        dd($validated);
    
        return redirect()->route('movies.index');
    }
}
