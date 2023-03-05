<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\role;
use App\Models\Permission;
class RoleController extends Controller
{
    //

    public function index(){

        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));


    }
  
}
