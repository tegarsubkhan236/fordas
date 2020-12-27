<?php

namespace App\Http\Controllers\SekreWilayah;

use App\Http\Controllers\Controller;
use App\Models\WilayahDa;

class HomeController extends Controller
{
    public function index()
    {
        $wilayah = session()->get('das_id');
        $data = WilayahDa::where('id',$wilayah)->first();

        return view("SekreWilayah.dashboard", [
            "title" => "Dashboard",
            "data" => $data,
        ])->with(["msg" => "Login Successfully !"]);
    }
}
