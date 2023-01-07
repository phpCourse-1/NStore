<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Admin
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'status' => 'active',
        ]);

        // Vendor
        DB::table('users')->insert([
            'name' => 'Vendor',
            'username' => 'vendor',
            'email' => 'vendor@gmail.com',
            'password' => Hash::make('vendor'),
            'role' => 'vendor',
            'status' => 'active',
        ]);

        // Customer
        DB::table('users')->insert([
            'name' => 'Customer',
            'username' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => Hash::make('customer'),
            'role' => 'user',
            'status' => 'active',
        ]);
    }
}
