<?php

namespace App\Http\Controllers\Donatur;

use App\Http\Controllers\Controller;
use App\Models\DetailDonatur;
use App\Models\Donasi;
use Illuminate\Http\Request;
use PDF;

class DonasiController extends Controller
{
    public function pilih_donasi($id)
    {
        $user_id = session()->get("id");
        $donatur = DetailDonatur::where(['user_id' => $user_id])->first();
        $insert = Donasi::insert([
            "detail_donatur_id" => $donatur->id,
            "proposal_id" => $id,
            "status" => 0,
            "created_at" => date("Y-m-d"),
            "updated_at" => date("Y-m-d"),
        ]);
        if($insert){
            return redirect()->route("donatur.dashboard")->with(["msg" => "Data berhasil diupdate !"]);
        }else{
            return back()->with(["msg" => "Data gagal diupdate !"]);
        }
    }

    public function form_bayar_donasi($id)
    {
        $user_id = session()->get("id");
        $donatur = DetailDonatur::where(['user_id' => $user_id])->first();

        $menunggu_pembayaran = [
            'detail_donatur_id' => $donatur->id,
            'status' => 0,
        ];

        $menunggu_konfirmasi = [
            'detail_donatur_id' => $donatur->id,
            'status' => 1,
        ];

        $dikonfirmasi = [
            'detail_donatur_id' => $donatur->id,
            'status' => 2,
        ];

        $data_menunggu_pembayaran = Donasi::where($menunggu_pembayaran)->get();
        $data_menunggu_konfirmasi = Donasi::where($menunggu_konfirmasi)->get();
        $data_dikonfirmasi = Donasi::where($dikonfirmasi)->get();

        $data = Donasi::where(['id' => $id])->first();
        // return $data;
        return view("Donatur.form_bayar", compact('data','data_menunggu_pembayaran','data_menunggu_konfirmasi','data_dikonfirmasi'));

    }

    public function proses_bayar(Request $req, $id)
    {
        $req->validate([
            "total_donasi" => "required",
            "keterangan" => "required",
            "bukti_transfer" => "required",
        ]);
        $data = $req->all();
        $bukti_transfer = $req->file("bukti_transfer");
        $data["bukti_transfer"] = $bukti_transfer->getClientOriginalName();
        $data["status"] = 1; //Menunggu Konfirmasi
        unset($data["_token"]);
        $create = Donasi::where('id',$id)->update($data);
        if($create){
            $bukti_transfer->move("public/storage",$bukti_transfer->getClientOriginalName());
            return back()->with(["msg" => "Data berhasil di update !"]);
        }
        return back()->with(["msg" => "Data berhasil di update !"]);
    }

    public function cetak_bukti($id)
    {
        $data = Donasi::where('id',$id)->first();
        $pdf = PDF::loadview('Donatur.bukti_donasi',compact('data'));
        return $pdf->download('laporan-pegawai-pdf');
    }
    public function test($id)
    {
        return $id;
    }
}
