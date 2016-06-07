<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'name' => 'Ricardo',
                'email' => 'ricardohs35@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ],
            [
                'name' => 'Fletes',
                'email' => 'elfletes@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ],
            [
                'name' => 'Natalia',
                'email' => 'nat.martin@msn.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ],
            [
                'name' => 'Elí',
                'email' => 'elamm.2040@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ],
            [
                'name' => 'Néstor',
                'email' => 'njarvizu@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ],
        ];
        
        foreach ($users as $user) {
            App\User::create($user);
        }
    }
}
