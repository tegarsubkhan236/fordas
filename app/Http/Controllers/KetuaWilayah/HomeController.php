<?php

namespace App\Http\Controllers\KetuaWilayah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("KetuaWilayah.dashboard", [
            "title" => "Dashboard",
        ])->with(["msg" => "Login Successfully !"]);
    }
}
