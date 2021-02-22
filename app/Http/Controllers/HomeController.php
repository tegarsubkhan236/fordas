<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\ProposalDetail;
use App\Models\WilayahDa;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing()
    {   $list = [
        'visibility' => 1,
        'status' => 1,
        ];
        $data = Proposal::where($list)->orderBy('id','DESC')->paginate(10);
        return view("Landing.pages.landing",compact("data"));
    }
    public function about()
    {
        return view("Landing.pages.about");
    }
    public function all_fordas()
    {
        $data = Wilayah::all();
        return view("Landing.pages.all_fordas", compact('data'));
    }

    public function all_fordas_detail($id)
    {
        $data = Wilayah::all();
        $detail = WilayahDa::where("wilayah_id",$id)->get();
        return view("Landing.pages.all_fordas_detail", [
            "data" => $data,
            "detail" => $detail,
        ]);
    }

    public function fordas_detail($id)
    {
        $data = WilayahDa::where('wilayah_id',$id)->get();
        $detail = Wilayah::where('id',$id)->first();
        return view('Landing.pages.fordas_detail', compact('data','detail'));
    }

    public function fordas_list_laporan($id)
    {
        $list = [
            'created_by' => $id,
            'visibility' => 1,
            'status' => 1,
        ];
        $detail = WilayahDA::where('id',$id)->first();
        $data = Proposal::where($list)->orderBy('id','DESC')->paginate(3);
        return view('Landing.pages.fordas_list_laporan', compact('detail','data'));
    }

    public function view_laporan($id)
    {
        $data = Proposal::where('id',$id)->first();
        $data_aktifitas = ProposalDetail::where('proposal_id',$id)->get();
        return view('Landing.pages.view_laporan', compact('data','data_aktifitas'));
    }
}
