<?php

namespace App\Http\Controllers\Donatur;

use App\Http\Controllers\Controller;
use App\Models\DetailDonatur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function profile()
    {
        $id = session()->get("id");
        $data = DetailDonatur::where(['user_id' => $id])->first();
        return view('Donatur.profile', compact('data'));
    }

    public function dashboard()
    {
        $id = session()->get("id");
        $data = DetailDonatur::where(['user_id' => $id])->first();
        return view('Donatur.dashboard', compact('data'));
    }
}
