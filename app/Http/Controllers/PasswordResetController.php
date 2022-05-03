<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    public function passforgot()
    {
        return view('auth.forgotpassword')->with([]);
    }

    public function passreset()
    {
        return view('auth.resetpassword')->with([]);
    }
}

