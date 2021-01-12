<?php

namespace App\Http\Controllers\KetuaPusat;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use App\Models\WilayahDa;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index()
    {
        $data = Wilayah::all();
        return view('KetuaPusat.wilayah',[
            "title" => "Wilayah Management",
            "data" => $data,
        ]);
    }

    public function detail($id,$nama)
    {
        $data = WilayahDa::where(["wilayah_id" => $id])->get();
        return view('KetuaPusat.WilayahDAS',[
            "nama" => $nama,
            "id" => $id,
            "title" => "Wilayah DAS",
            "data" => $data,
        ]);
    }
}
