<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::where('vote', '>', 8 )->get();
        // dd($movies);
        return view('welcome', compact('movies'));
    }

    public function aboutUs() {
        $movies = Movie::all();
        return view('aboutUs', compact('movies'));
    }

    public function faq() {
        return view('faq');
    }
}
