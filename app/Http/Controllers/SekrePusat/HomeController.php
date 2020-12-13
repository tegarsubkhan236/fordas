<?php

namespace App\Http\Controllers\SekrePusat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("SekrePusat.dashboard", [
            "title" => "Dashboard",
        ])->with(["msg" => "Login Successfully !"]);
    }
}
