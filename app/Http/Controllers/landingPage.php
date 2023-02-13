<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dishe;

class landingPage extends Controller
{
    public function index()
    {
        return view('landing_page.index',[
            'dishes'=> Dishe::all()
        ]);
    }
}
