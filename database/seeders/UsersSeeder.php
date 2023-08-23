<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
            'firstName'=>'admin',
            'lastName'=>'administrator',
            'email'=>'admin@admin.com',
            'address'=>'Admin Street, Admin Subdivision, Brgy.Admin, Admin City',
            'contactNumber'=>'9954133489',
            'password'=>Hash::make('admin123'),

        ],
        [
            'firstName'=>'user',
            'lastName'=>'User',
            'email'=>'user@user.com',
            'address'=>'User Street, User Subdivision, Brgy.User, User City',
            'contactNumber'=>'9954133489',
            'password'=>Hash::make('user123'),

        ],
        ]
    );
    }
}
