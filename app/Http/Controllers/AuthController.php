<?php

namespace App\Http\Controllers;

use App\Casts\UserStatus;
use App\Models\DetailDonatur;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_page()
    {
        $title = "";

        return view('login', [
            $title => "Login Page"
        ]);
    }

    public function register_page()
    {
        $title = "";

        return view('register', [
            $title => "Register Page"
        ]);
    }

    //create donatur
    public function register_process(Request $req)
    {
        $req->validate([
            "username" => "required",
            "password" => "required",
            "name" => "required",
            "gender" => "required",
            "alamat" => "required",
            "no_hp" => "required",
        ]);
        $data = $req->all();
        unset($data["_Token"]);
        $create_user = User::create([
            "username" => $data["username"],
            "password" => $data["password"],
            "level" => 5,
            "status" => 1,
        ]);
        if($create_user){
            $detail_user = DetailDonatur::create([
                    "name" => $data["name"],
                    "gender" => $data["gender"],
                    "alamat" => $data["alamat"],
                    "no_hp" => $data["no_hp"],
            ]);
            return redirect("/")->with(["msg" => "Data has been stored successfully !"]);
        }
        return back()->withErrors(["msg" => "Data failed to store !"]);
    }

    public function login_process(Request $req)
    {
        $req->validate([
            "username" => "required",
            "password" => "required"
        ]);

        $find = User::where([
            "username" => $req->username,
            "password" => $req->password,
            "status" => UserStatus::ACTIVE,
        ]);

        if($find->count() > 0){
            session([
                "id" => $find->first()->id,
                "das_id" => $find->first()->das_id,
                "username" => $find->first()->username,
                "level" => $find->first()->level,
                "created_at" => $find->first()->created_at,
            ]);
            if($find->first()->level == 1){
                $pages = "super";
            } elseif($find->first()->level == 2){
                $pages = "pusat_ketua";
            } elseif($find->first()->level == 3){
                $pages = "pusat_sekre";
            } elseif($find->first()->level == 4){
                $pages = "wilayah_sekre";
            } elseif($find->first()->level == 5){
                $pages = "donatur";
            }

            return redirect("/" .$pages)->with(["msg" => "Login Successfully !"]);
        }else{
            return back()->withErrors(["msg" => "Data not found !"]);
        }

    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
