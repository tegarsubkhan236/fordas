<?php

namespace App\Http\Controllers\SekrePusat;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use App\Models\ProposalDetail;
use App\Models\ProposalKategori;
use Illuminate\Http\Request;
use PDF;

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

    public function cetak_proposal($id)
    {
        $data = Proposal::where('id',$id)->first();
        $data_aktifitas = ProposalDetail::where('proposal_id',$id)->get();
        $pdf = PDF::loadview('SekrePusat.cetak_proposal',compact('data','data_aktifitas'));
        return $pdf->download('laporan-proposal-pdf');
    }

    public function print_proposal($id)
    {
        $data = Proposal::where('id',$id)->first();
        $data_aktifitas = ProposalDetail::where('proposal_id',$id)->get();
        $pdf = PDF::loadview('SekrePusat.print_proposal',compact('data','data_aktifitas'));
        return $pdf->download('laporan-proposal-pdf');
    }

    public function view_cetak_proposal()
    {
        return view("SekrePusat.view_cetak_proposal");
    }

    public function cetak_by_created(Request $req)
    {
        $req->validate([
            "created_at" => "required",
        ]);

        $data = Proposal::where('created_at',$req->created_at)->get();
        $pdf = PDF::loadview('SekrePusat.cetak_by_date', compact('data'));
        return $pdf->download('laporan_by_created');
    }
}
