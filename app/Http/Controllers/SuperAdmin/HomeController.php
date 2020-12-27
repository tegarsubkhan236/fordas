<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("Super.dashboard", [
            "title" => "Dashboard",
        ])->with(["msg" => "Login Successfully !"]);
    }

    public function profile()
    {
        $id = session()->get("id");
        $data = User::where(["id" => $id])->first();
        return view('profile', [
            "title" => "Profile",
            "data" => $data,
            "route" => [
                "name" => "profile.update",
                "params" => $id
            ],
        ]);
        // return $data;
    }

    public function profile_update(Request $request,$id)
    {
        $request->validate([
            "username" => "required",
            "password" => "required",
        ]);
        $data = $request->all();
        unset($data["_token"]);
        $store = User::where(["id" => $id])->update($data);
        if($store){
            return back()->with(["msg" => "Data has been updated successfully !"]);
        } else {
            return back()->with(["msg" => "Data failed to store !"]);
        }
    }
}
