<?php

namespace App\Http\Controllers\SekreWilayah;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use App\Models\ProposalKategori;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
        $current = session()->get("das_id");
        $data = Proposal::where("created_by",$current)->get();
        return view("SekreWilayah.proposal.index",[
            "title" => "Proposal Management",
            "data" => $data,
        ]);
    }

    public function create()
    {
        $select = ProposalKategori::all();
        return view("SekreWilayah.proposal.add",[
            "title" => "Tambah Proposal Baru",
            "select" => $select,
            "route" => [
                "name" => "proposal.store",
                "params" => ""
            ],
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => "required",
            'latar_belakang' => 'required',
            'maksud_tujuan' => 'required',
            'waktu'=> 'required',
            'tgl'=> 'required',
            'tempat'=> 'required',
            'peserta' => 'required',
            'narasumber' => 'required',
            'bahasan' => 'required',
            'visibility' => 'required',
            'kategori_id' => 'required',
        ]);
        $data = $request->except('_token');
        $data['status'] = 0;
        $data['created_by'] = session()->get('das_id');
        $data["created_at"] = date("Y-m-d");
        $data["updated_at"] = date("Y-m-d");
        $store = Proposal::insert($data);

        if ($store) {
            return back()->with(["msg" => "Data berhasil disimpan !"]);
        } else {
            return back()->with(["msg" => "Data gagal disimpan !"]);
        }
    }

    public function edit($id)
    {

        $data = Proposal::where('id', $id)->first();
        $select = ProposalKategori::all();

        return view("SekreWilayah.proposal.add",[
            "title" => "Edit Proposal",
            "data" => $data,
            "select" => $select,
            "route" => [
                "name" => "proposal.update",
                "params" => $id
            ],
        ]);
    }

    public function update(Request $req,$id)
    {
        $req->validate([
            'judul' => "required",
            'latar_belakang' => 'required',
            'maksud_tujuan' => 'required',
            'waktu'=> 'required',
            'tgl'=> 'required',
            'tempat'=> 'required',
            'peserta' => 'required',
            'narasumber' => 'required',
            'bahasan' => 'required',
            'visibility' => 'required',
            'kategori_id' => 'required',
        ]);
        $data = $req->except('_token');
        $data['status'] = 0;
        $data['created_by'] = session()->get('das_id');
        $data["created_at"] = date("Y-m-d");
        $data["updated_at"] = date("Y-m-d");
        $store = Proposal::where('id',$id)->update($data);

        if ($store) {
            return redirect('wilayah_sekre/proposal')->with(["msg" => "Data berhasil disimpan !"]);
        } else {
            return back()->with(["msg" => "Data gagal disimpan !"]);
        }
    }

    public function detail($id)
    {

        $data = Proposal::where('id', $id)->first();
        $select = ProposalKategori::all();

        return view("SekreWilayah.proposal.detail",[
            "title" => "Detail Proposal",
            "data" => $data,
            "select" => $select,
        ]);
    }
}
