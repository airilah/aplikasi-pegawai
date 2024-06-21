<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
            "nama"  => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("admin"),
            "role" => "admin",
          ],[
            "nama"  => "anas",
            "email" => "anas@gmail.com",
            "password" => Hash::make("anas"),
            "role" => "admin",
        ]]);
    }
}
