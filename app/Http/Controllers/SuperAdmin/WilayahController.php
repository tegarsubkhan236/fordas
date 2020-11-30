<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use App\Models\WilayahDa;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index()
    {
        $data = Wilayah::all();
        return view('Super.wilayah.index',[
            "title" => "Wilayah Management",
            // "create_route" => "wilayah.create",
            "data" => $data,
            "route_create" => [
                "name" => "wilayah.store",
            ],
        ]);
    }

    public function detail($id,$nama)
    {
        $data = WilayahDa::where(["wilayah_id" => $id])->get();
        return view('Super.wilayah_das.index',[
            "nama" => $nama,
            "id" => $id,
            "title" => "Wilayah DAS",
            "data" => $data,
            "route_create" => [
                "name" => "das.store",
            ],
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama" => "required",
        ]);
        $data = $request->all();
        $data["nama"] = strtoupper($data["nama"]);
        unset($data["_token"]);
        $store = Wilayah::insert($data);
        if($store){
            return back()->with(["msg" => "Data has been stored successfully !"]);
        } else {
            return back()->with(["msg" => "Data failed to store !"]);
        }
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            "nama" => "required",
        ]);
        $data = $request->all();
        $data["nama"] = strtoupper($data["nama"]);
        unset($data["_token"]);
        $store = Wilayah::where(["id" => $id])->update($data);
        if($store){
            return back()->with(["msg" => "Data has been updated successfully !"]);
        } else {
            return back()->with(["msg" => "Data failed to store !"]);
        }
    }

    // public function delete($id)
    // {
    //     Wilayah::find($id)->delete();
    //     return back()->with(["msg" => "Data has been deleted successfully !"]);
    // }
}
