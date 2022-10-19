<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class HomePageController extends Controller



{

    public array $titles = ["document_title" => "Home page", "h1" => "Home page", "h2" => "This is the test of passing values"];



    public function homePage()
    {

        return view('index', ['titles' => $this->titles]);
    }


    public function search()
    {
        // $name = $_GET["search"] ?? "%";
        // $where = [["movie_type_id", 1], ["votes_nr", ">=", 5000], ["name", "%" . $name . "%"]];
        // $resultsQuery = Movie::where($where)
        //     ->orderby("rating", "desc")
        //     ->limit(100);

        // $results = $resultsQuery->get();

        $results  = DB::select('SELECT * FROM `movies` WHERE 1 AND `votes_nr`>? AND `movie_type_id` = ? AND `name` LIKE ? ORDER BY `rating` DESC LIMIT ?', [5000, 1, '%' . $_GET["search"] . '%', 100]);




        return view(
            'search',

            ['titles' => $this->titles, 'results' => $results]

        );
    }
}
