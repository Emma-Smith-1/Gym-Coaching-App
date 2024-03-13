<?php

namespace Database\Seeders;

use App\Models\Coach;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Coach::factory()->count(5)->create();
    }
}
