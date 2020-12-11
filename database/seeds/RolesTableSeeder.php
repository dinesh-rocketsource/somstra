<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'System Administrator',
            ],
            [
                'id'    => 2,
                'title' => 'Staff',
            ],
        ];

        Role::insert($roles);
    }
}
