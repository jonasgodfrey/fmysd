<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DelegatesController extends Controller
{
    public function delegatedash()
    {
        return view('backend.statedelegate.index')->with([]);
    }

    public function athletedash()
    {
        return view('backend.participant.index')->with([]);
    }

    public function delegatelist()
    {
        return view('backend.statedelegate.delegates')->with([]);
    }

    public function athleteslist()
    {
        return view('backend.participant.athletes')->with([]);
    }
}
