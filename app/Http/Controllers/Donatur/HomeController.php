<?php

namespace App\Http\Controllers\Donatur;

use App\Http\Controllers\Controller;
use App\Models\DetailDonatur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function profile()
    {

        $data = DetailDonatur::where('user_id', session()->get("id"))->first();
        return view('Donatur.profile', compact('data'));
    }
}
