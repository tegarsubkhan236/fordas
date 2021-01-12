<?php

namespace App\Http\Controllers\KetuaPusat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("KetuaPusat.dashboard", [
            "title" => "Dashboard",
        ])->with(["msg" => "Login Successfully !"]);
    }
}
