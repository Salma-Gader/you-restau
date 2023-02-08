<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticController extends Controller
{
    public function index() {
        return view('index');
    }

    public function menu() {
        return view('menu');
    }
    public function portfolio() {
        return view('portfolio');
    }
}
