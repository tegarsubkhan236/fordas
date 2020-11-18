<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index()
    {
        $data = Wilayah::all();
        return view('Super.wilayah.index',[
            "title" => "Wilayah Management",
            "data" => $data,
        ]);
    }

    public function create()
    {
        return view('Super.wilayah.create',[
            "title" => "Create Wilayah",
        ]);
    }

    public function edit($id)
    {
        return view('Super.wilayah.index',[
            "title" => "Wilayah Management",
        ]);
    }
}
