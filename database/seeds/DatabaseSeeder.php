<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables = ['users'];
        foreach ($tables as $table) {
            DB::table('users')->truncate();
        }
         $this->call(UsersTableSeeder::class);
    }
}
