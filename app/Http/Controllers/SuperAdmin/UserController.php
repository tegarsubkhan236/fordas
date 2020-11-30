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
}
