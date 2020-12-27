<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view("Super/user/index",[
            "title" => "User Management",
            "data" => $data,
            "route_create" => [
                "name" => "user.store",
            ],
        ]);
    }

    public function update(Request $request,$id)
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
