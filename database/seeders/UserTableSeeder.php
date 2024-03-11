<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): 
    {
        $u = new User;
        $u->name = "Bob";
        $u->email = "bob@gmail.com";
        $u->password = "abcdefg";
        $u->save();

        User::factory()->count(10)->create();
    }
}
