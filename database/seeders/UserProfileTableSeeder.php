<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        UserProfile::factory()->count(100)->create();
    }
}
