<?php

namespace App\Http\Controllers\Donatur;

use App\Http\Controllers\Controller;
use App\Models\DetailDonatur;
use App\Models\Donasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function profile()
    {
        $id = session()->get("id");
        $data = DetailDonatur::where(['user_id' => $id])->first();
        return view('Donatur.profile', compact('data'));
    }

    public function dashboard()
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

        $data = Donasi::where($menunggu_pembayaran)->get();
        $data_menunggu_konfirmasi = Donasi::where($menunggu_konfirmasi)->get();
        $data_dikonfirmasi = Donasi::where($dikonfirmasi)->get();
        return view('Donatur.dashboard', compact('data',"data_menunggu_konfirmasi","data_dikonfirmasi"));
    }
}
