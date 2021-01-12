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
}
