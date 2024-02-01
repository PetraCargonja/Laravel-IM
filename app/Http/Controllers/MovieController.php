<?php

namespace App\Http\Controllers;

use App\DatabaseConnectionInterface;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct(private DatabaseConnectionInterface $connection)
    {
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        dd($request->cookie('laravel_session'));
        return [
            'Shawshank Redemption', 'The Godfather', 'The Dark Knight'
        ];
    }

    public function show(Request $request, int $id)
    {
        dd($request);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request) 
    {
        dd($request->input('name'));
        // logika za spremanje
        if ($request->string('name')->length() < 3) {
            return redirect()->back()->withInput();
        }
    
        return redirect()->route('movies.index');
    }
}
