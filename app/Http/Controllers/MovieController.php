<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;



class MovieController extends Controller


{

    public function handleForm()
    {
        $movie = new Movie;
        $movie->name = $_POST["name"];
        $movie->save();
    }

    public function search()
    {
        $movies = Movie::orderBy("rating")->limit(20)->get();
        return view("movie", compact("movies"));
    }
}
