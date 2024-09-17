<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1234'),

            ],
            [
                'name' => 'Editor',
                'email' => 'editor@gmail.com',
                'password' => Hash::make('1234'),

            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('1234'),

            ]
        ];
        User::truncate();
        DB::table('users')->insert($users);
    }

}

