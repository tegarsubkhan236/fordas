<?php

namespace App\Http\Controllers\SekrePusat;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use App\Models\ProposalDetail;
use App\Models\ProposalKategori;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
   {
        $data = Proposal::where("status",1)->get();
        return view("SekrePusat.proposal.index",[
            "title" => "Proposal",
            "data" => $data,
        ]);
   }

   public function detail($id)
    {

        $data = Proposal::where('id', $id)->first();
        $select = ProposalKategori::all();

        return view("SekrePusat.detail_proposal",[
            "title" => "Detail Proposal",
            "data" => $data,
            "select" => $select,
        ]);
    }

    public function aktifitas_detail($id)
    {
        $data = ProposalDetail::where("proposal_id",$id)->get();
        return view("SekrePusat.proposal_aktifitas",compact("data"));
    }

    public function aktifitas_update(Request $req,$id)
    {
        $req->validate([
            'status' => 'required',
        ]);
        $data = $req->all();
        unset($data["_token"]);
        $update = ProposalDetail::where('id',$id)->update($data);
        if ($update) {
            return back()->with(["msg" => "Data berhasil diupdate !"]);
        }
        return back()->with(["msg" => "Data gagal diupdate !"]);
    }
}
