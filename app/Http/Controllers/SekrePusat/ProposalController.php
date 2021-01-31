<?php

namespace App\Http\Controllers\SekrePusat;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
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
}
