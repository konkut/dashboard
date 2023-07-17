<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class firstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'status' => 1,
            'role' => 1,
            'name' => "Pedro Luis Condori Cutile",
            'email' => 'luiskonkut@gmail.com',
            'password' => Hash::make('password'),
            'permissions' => json_encode(['all' => true]),
        ]);
    }
}
