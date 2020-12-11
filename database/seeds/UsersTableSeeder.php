<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Rocket Source',
                'email'          => 'webmaster@rocketsource.co',
                'password'       => bcrypt('rocketsource'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
