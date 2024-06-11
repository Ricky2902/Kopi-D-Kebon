<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'usertype' => 'user',
                'phone' => '1234567890',
                'address' => '123 User Street',
                'password' => Hash::make('user123'), // password should be hashed
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'usertype' => 'admin',
                'phone' => '0987654321',
                'address' => '456 Admin Avenue',
                'password' => Hash::make('admin123'), // password should be hashed
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
