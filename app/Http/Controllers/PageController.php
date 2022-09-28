<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index(){
        $movies= Movie::all();
        foreach($movies as $movie){
        
            echo $movie->title .  '<br>';
            echo $movie->original_title . '<br>';
        }
        die();
        return view('homepage');
    }
}
