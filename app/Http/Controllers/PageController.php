<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing() {
        return view('landing');
    }

    public function catalog() {
        return view('catalog');
    }

    public function w() {
        return view('welcome');
    }
}
