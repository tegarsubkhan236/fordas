<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_page()
    {
        $title = "Login Page";

        return view('test', [
            $title => "Login Page"
        ]);
    }
}
