<?php

namespace Database\Seeders;

use App\Models\roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{

    public function run()
    {
        roles::truncate();
        $role =  new roles;
        $role->name = 'Admin';
        $role->save();

    }
}
