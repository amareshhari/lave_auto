<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->truncate();
        \DB::table('admins')->insert([
            'name' => 'Admin', 
            'email' => 'admin@yopmail.com', 
            'password' => \Hash::make('tech@Admin'),
            'status' =>1 
        ]);
    }
}
