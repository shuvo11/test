<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function showhome(){
        return view('Home');
    }

    public function about()
    {
        return view('about');
    }

    function datas(){
        $users = DB::select('select * from new_student where name = ?', ['shuvo']);
        return view('data',['userKey'=>$users]);
    }
}
