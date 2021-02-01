<?php

namespace App\Http\Controllers\SekreWilayah;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use App\Models\WilayahDa;

class HomeController extends Controller
{
    public function index()
    {
        $wilayah = session()->get('das_id');
        $data = WilayahDa::where('id',$wilayah)->first();
        //
        $fail = Proposal::where('created_by',$wilayah)->where('status',2)->get();
        $acc = Proposal::where('created_by',$wilayah)->where('status',1)->get();
        $wait = Proposal::where('created_by',$wilayah)->where('status',0)->get();
        //
        $donate = Proposal::where('created_by',$wilayah)->where('donate',1)->get();
        $no_donate = Proposal::where('created_by',$wilayah)->where('donate',0)->get();
        //
        $proposal = Proposal::where('created_by',$wilayah)->get();

        return view("SekreWilayah.dashboard", [
            "title" => "Dashboard",
            "data" => $data,
            "wait" => $wait,
            "acc" => $acc,
            "fail" => $fail,
            "donate" => $donate,
            "no_donate" => $no_donate,
            "proposal" => $proposal,
        ])->with(["msg" => "Login Successfully !"]);
    }
}
