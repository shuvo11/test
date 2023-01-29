<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuaryController extends Controller
{
            function showselect(){
                
                return view('insert');
                
            }

            function insert(Request $req){

                $name = $req->input('myName');
                $roll = $req->input('myMoll');
                $class = $req->input('myClass');

               $result = DB::insert('INSERT INTO `new_student`(`name`,  `roll`, `class`) VALUES (?,?,?)',[$name, $roll, $class ]);

               if($result==true){
                return "data insert sucessfully";
               }
               else {
                return "fail";
               }

            }


            function delee(){

            }
}
