<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = \App\Models\User::where('usertype', '=', '0')->get();
        return view('admin.users.index', ['users' => $users]);
    }
}
