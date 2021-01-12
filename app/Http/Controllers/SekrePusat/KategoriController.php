<?php

namespace App\Http\Controllers\SekrePusat;

use App\Http\Controllers\Controller;
use App\Models\ProposalKategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data =  ProposalKategori::all();
        return view("SekrePusat/kategori/index",[
            "title" => "Kategori Management",
            "data" => $data,
            "route_create" => [
                "name" => "pusat_sekre.kategori.store",
            ],
        ]);
    }

    public function store(Request $req)
    {
        $req->validate([
            "nama" => "required",
        ]);
        $data = $req->all();
        $create = ProposalKategori::create($data);
        if ($create) {
            return redirect()->back()->with(["msg" => "Data berhasil disimpan !"]);
        }
        return redirect()->back()->with(["msg" => "Data gagal disimpan !"]);
    }

    public function update(Request $req,$id)
    {
        $req->validate([
            "nama" => "required",
        ]);
        $data = $req->all();
        unset($data["_token"]);
        $update = ProposalKategori::where("id",$id)->update($data);
        if ($update) {
            return redirect()->back()->with(["msg" => "Data berhasil diupdate !"]);
        }
        return redirect()->back()->with(["msg" => "Data gagal diupdate !"]);
    }
}
