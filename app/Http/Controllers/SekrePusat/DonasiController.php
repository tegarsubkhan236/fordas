<?php

namespace App\Http\Controllers\SekrePusat;

use App\Http\Controllers\Controller;
use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index()
    {
        $data = Donasi::orderBy("created_at","DESC")->get();
        return view("SekrePusat.donasi.index", compact('data'));
    }

    public function detail($id)
    {
        $data = Donasi::where('id',$id)->first();
        return view("sekrePusat.donasi.detail",compact('data'));
    }

    public function edit($id)
    {
        $data = Donasi::where('id',$id)->first();
        return view("sekrePusat.donasi.edit",compact('data'));
    }

    public function update(Request $req,$id)
    {
        $req->validate([
            "status" => "required",
        ]);
        $data = $req->all();
        unset($data['_token']);
        $update = Donasi::where('id',$id)->update($data);
        if($update){
            return redirect('pusat_sekre/donasi')->with(["msg" => "Data berhasil disimpan !"]);
        }
        return back()->withErrors(["msg" => "Data gagal diupdate !"]);
        // return $update;

    }
}
