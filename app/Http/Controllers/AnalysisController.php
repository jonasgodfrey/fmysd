<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    public function GenAnalysis(Type $var = null)
    {
        return view('backend.admin.analysis')->with([]);
    }
}
