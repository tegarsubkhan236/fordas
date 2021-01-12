<?php

namespace App\Http\Controllers\SekreWilayah;

use App\Http\Controllers\Controller;
use App\Models\ProposalKategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data =  ProposalKategori::all();
        return view("SekreWilayah/kategori/index",[
            "title" => "Kategori Management",
            "data" => $data,
            "route_create" => [
                "name" => "kategori.store",
            ],
        ]);
    }
}
