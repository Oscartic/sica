<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index', [
            'users' => User::orderBy('id')->get(),
            'roles' => Role::all()
        ]);
    }

    public function listRole() {
        return view( 'admin.roles.index', [
            'roles' => Role::orderBy('id')->get()
        ]);
    }
}
