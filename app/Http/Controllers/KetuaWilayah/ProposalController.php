<?php

namespace App\Http\Controllers\KetuaWilayah;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
        $data = Proposal::all();
        return view("KetuaWilayah.proposal.index",[
            "title" => "Proposal Management",
            "data" => $data,
        ]);
    }
}
