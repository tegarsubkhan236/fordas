<?php

namespace App\Http\Controllers\KetuaPusat;

use App\Http\Controllers\Controller;
use App\Models\Donasi;
use Illuminate\Http\Request;
use App\Models\Proposal;
use App\Models\ProposalKategori;

class ProposalController extends Controller
{
   public function index()
   {
        $data = Proposal::orderBy("created_at","DESC")->get();
        return view("KetuaPusat.proposal",[
            "title" => "Proposal Management",
            "data" => $data,
        ]);
   }

   public function update(Request $req,$id)
   {
       $req->validate([
           'status' => 'required',
           "keterangan" => 'nullable',
       ]);
       $data = $req->all();
       unset($data["_token"]);
       $update = Proposal::where('id',$id)->update($data);
       if ($update) {
            return back()->with(["msg" => "Data berhasil diupdate !"]);
        }
        return back()->with(["msg" => "Data gagal diupdate !"]);
   }

   public function detail($id)
    {

        $data = Proposal::where('id', $id)->first();
        $select = ProposalKategori::all();

        return view("KetuaPusat.detail_proposal",[
            "title" => "Detail Proposal",
            "data" => $data,
            "select" => $select,
        ]);
    }

    public function donasi_by_proposal($id)
    {
        $data = Donasi::where("proposal_id",$id)->where("status",2)->get();
        return view("KetuaPusat.proposal_donasi",compact('data'));
    }
}
