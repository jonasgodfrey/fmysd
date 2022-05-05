<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function addsports()
    {
        return view('backend.sports.addsports')->with([]);
    }

    public function addsportsevents()
    {
        return view('backend.sports.addsportevent')->with([]);
    }
}
