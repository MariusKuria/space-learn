<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admino duomenys
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'spaceadmin@gmail.com',
                'password' => Hash::make('12345'),
                'role' => 'admin',
                'status' => '1',
            ],
            //Instruktoriaus duomenys
            [
                'name' => 'Instructor',
                'username' => 'instructor',
                'email' => 'spaceinstructor@gmail.com',
                'password' => Hash::make('12345'),
                'role' => 'instructor',
                'status' => '1',
            ],
            //User duomenys
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'spaceuser@gmail.com',
                'password' => Hash::make('12345'),
                'role' => 'user',
                'status' => '1',
            ]

        ]);
    }
}
