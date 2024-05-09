<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('guests.home');
    }
    public function movies()
    {

        $movies = Movie::all();
        //dd($movies);
        return view('guests.movies.index', compact('movies'));
    }
}
