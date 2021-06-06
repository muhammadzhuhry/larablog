<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // index = home
    public function index()
    {
        return \view('index');
    }

    // public function about()
    // {

    // }
}
