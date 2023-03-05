<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\User;



class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole= Role::create(['name'=>'user']);
        $writer= Role::create(['name'=>'writer']);
        $adminRole= Role::create(['name'=>'admin']);

        User::create([

            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
            'email_verified_at'=>now(),
            'role_id'=> $adminRole->id

        ]);
    }
}
