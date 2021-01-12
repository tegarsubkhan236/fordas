<?php

namespace App\Http\Controllers\KetuaPusat;

use App\Http\Controllers\Controller;
use App\Models\ProposalKategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data =  ProposalKategori::all();
        return view("KetuaPusat/kategori/index",[
            "title" => "Kategori",
            "data" => $data,
        ]);
    }
}
