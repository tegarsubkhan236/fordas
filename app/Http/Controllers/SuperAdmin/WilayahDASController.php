<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\WilayahDa;
use Illuminate\Http\Request;

class WilayahDASController extends Controller
{
    public function index()
    {
        $data = WilayahDa::all();
        return view('Super.wilayah_das.index',[
            "title" => "Wilayah DAS Management",
            "data" => $data,
        ]);
    }

    public function create()
    {
        return view('Super.wilayah_das.create',[
            "title" => "Create Wilayah DAS",
        ]);
    }

    public function edit($id)
    {
        return view('Super.wilayah_das.index',[
            "title" => "Wilayah DAS Management",
        ]);
    }
}
