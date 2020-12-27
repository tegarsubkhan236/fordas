<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WilayahDa;
use Illuminate\Http\Request;

class WilayahDASController extends Controller
{
    // public function index()
    // {
    //     $data = WilayahDa::all();
    //     return view('Super.wilayah_das.index',[
    //         "title" => "Wilayah DAS Management",
    //         "data" => $data,
    //     ]);
    // }

    public function store(Request $request, $id)
    {
        $request->validate([
            "nama" => "required|unique:wilayah_das,nama",
        ]);
        $data = $request->all();
        $data["nama"] = strtoupper($data["nama"]);
        $data["wilayah_id"] = $id;
        unset($data["_token"]);
        $store = WilayahDa::insert($data);
        if($store){
            $das_id = WilayahDa::where(["nama" => strtoupper($data["nama"])])->first();
            $user = User::insert([
                [
                "das_id" => $das_id->id,
                "username" => "ketua_".$data["nama"],
                "password" => 12345,
                "level" => 4,
                "status" => 1,
                ],
                [
                "das_id" => $das_id->id,
                "username" => "sekretaris_".$data["nama"],
                "password" => 12345,
                "level" => 5,
                "status" => 1,
                ],
            ]);
            return back()->with(["msg" => "Data has been stored successfully !"]);
        } else {
            return back()->withErrors(["msg" => "Data failed to store !"]);
        }
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            "nama" => "required",
        ]);
        $data = $request->all();
        unset($data["_token"]);
        $data["nama"] = strtoupper($data["nama"]);
        $store = WilayahDa::where(["id" => $id])->update($data);
        if($store){
            return back()->with(["msg" => "Data has been updated successfully !"]);
        } else {
            return back()->withErrors(["msg" => "Data failed to store !"]);
        }
    }
}
