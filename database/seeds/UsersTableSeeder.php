<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$pxx4h5ppEKH2AjHi.BotmeIhZWqIxIo9ELQYz1ViKE.LQi7pUXIha',
            'remember_token' => null,
            'created_at'     => '2019-03-25 17:34:57',
            'updated_at'     => '2019-03-25 17:34:57',
            'deleted_at'     => null,
            'approved'       => 1,
        ]];

        User::insert($users);
    }
}
