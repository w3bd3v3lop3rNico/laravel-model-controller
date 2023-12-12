<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $data = [
            'paperino'=> 56,
        ];
        return view('welcome', $data);
    }
}
