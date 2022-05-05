<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateAnalysisController extends Controller
{
    public function stateanalysis()
    {
        return view('backend.admin.stateanalysis')->with([]);
    }
}
