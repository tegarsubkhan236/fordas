<?php

namespace App\Http\Controllers\SekreWilayah;

use App\Http\Controllers\Controller;
use App\Models\ProposalDetail;
use Illuminate\Http\Request;

class DetailProposalController extends Controller
{
    public function create_laporan_aktifitas(Request $request,$id)
    {
        $request->validate([
            "file_aktifitas" => "required",
            "detail_aktifitas" => "required",
        ]);
        if($request->has("file_aktifitas")){
            foreach($request->file("file_aktifitas") as $file){
                $name = time().'.'.$file->extension();
                $file->move("public/storage",$name);
                $data[] = $name;
            }
        }
        $file = new ProposalDetail();
        $file->proposal_id = $id;
        $file->detail_aktifitas = $request->detail_aktifitas;
        $file->aktifitas=json_encode($data);
        $file->save();
        return redirect('wilayah_sekre/proposal')->with(["msg" => "Data berhasil disimpan !"]);
    }
}
