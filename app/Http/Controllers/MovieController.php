<?php

namespace App\Http\Controllers;

use App\DatabaseConnectionInterface;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct(private DatabaseConnectionInterface $connection)
    {
        $this->middleware('admin')->except('index');
    }

    public function index(Request $request)
    {
        return [
            'Shawshank Redemption', 'The Godfather', 'The Dark Knight'
        ];
    }

    public function show(int $id)
    {
        dd($this->connection);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store() 
    {
        // logika za spremanje
    
        return redirect()->route('movies.index');
    }
}
