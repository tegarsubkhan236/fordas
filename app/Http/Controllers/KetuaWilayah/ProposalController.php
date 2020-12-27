<?php

namespace App\Http\Controllers\KetuaWilayah;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use App\Models\ProposalKategori;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
        $data = Proposal::where(["created_by" => session()->get('das_id')])->get();
        // $data->get()->transform(function ($value) {
        //     return $value;
        // });

        return view("KetuaWilayah.proposal.index",[
            "title" => "Proposal Management",
            "data" => $data,
        ]);
    }

    public function detail($id)
    {

        $data = Proposal::where('id', $id)->first();
        $select = ProposalKategori::all();

        return view("KetuaWilayah.proposal.detail",[
            "title" => "Detail Proposal",
            "data" => $data,
            "select" => $select,
        ]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            "status" => "required",
        ]);
        $data = $request->all();
        unset($data["_token"]);

        $store = Proposal::where(["id" => $id])->update($data);
        if($store){
            return back()->with(["msg" => "Data has been updated successfully !"]);
        } else {
            return back()->withErrors(["msg" => "Data failed to store !"]);
        }
    }
}
