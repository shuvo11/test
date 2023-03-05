<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\role;
class PermissionController extends Controller
{
    

    
    public function index(){

        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));


    }
  
}
