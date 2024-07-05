<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Atmin', 'email' => 'atmin@gmail.com', 'password' => 'atmin123', 'role' => 1]
        ];
        DB::table('users')->insert($users);
    }
}
