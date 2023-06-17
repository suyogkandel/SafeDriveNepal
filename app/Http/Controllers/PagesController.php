<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function report()
    {
        return view('report');
    }

    public function map()
    {
        return view('map');
    }
}
