<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        return view("movies.index", ["movies" => Movie::all()]);
    }

    public function tickets(Movie $movie){
        return view("movies.tickets", ["movie" => $movie]);
    }

    public function book(Movie $movie){
        return view("movies.book", ["movie" => $movie]);
    }
}
