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
            'password'=>Hash::make('admin123'),

        ],
        [
            'firstName'=>'user',
            'lastName'=>'User',
            'email'=>'user@user.com',
            'password'=>Hash::make('user123'),

        ],
        ]
    );
    }
}
