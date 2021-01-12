<?php

namespace App\Http\Controllers\KetuaPusat;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index()
    {
        $data = Wilayah::all();
        return view('KetuaPusat.wilayah.index',[
            "title" => "Wilayah Management",
            "data" => $data,
        ]);
    }
}
