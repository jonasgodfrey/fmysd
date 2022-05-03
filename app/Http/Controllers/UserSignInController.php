<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSignInController extends Controller
{
    public function index()
    {
        return view('auth.login')->with([]);
    }
}
