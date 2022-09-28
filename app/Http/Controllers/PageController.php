<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index(){
        // per recuperare tutti i dati della tabella
        $movies= Movie::orderby('id','desc')->get();

        $movie= Movie::find(1);
        return view('homepage', compact('movies'));
    }
}
