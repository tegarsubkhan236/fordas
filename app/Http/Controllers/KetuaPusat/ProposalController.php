<?php

namespace App\Http\Controllers\KetuaPusat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proposal;

class ProposalController extends Controller
{
   public function index()
   {
        $data = Proposal::all();
        return view("SekreWilayah.proposal.index",[
            "title" => "Proposal Management",
            "data" => $data,
        ]);
   }
}
