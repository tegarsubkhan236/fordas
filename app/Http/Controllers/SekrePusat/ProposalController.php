<?php

namespace App\Http\Controllers\SekrePusat;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
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
}
