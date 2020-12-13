<?php

namespace App\Http\Controllers\SekreWilayah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view("SekreWilayah.dashboard", [
            "title" => "Dashboard",
        ])->with(["msg" => "Login Successfully !"]);
    }
}
