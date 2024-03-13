<?php

namespace Database\Seeders;

use App\Models\Posts;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Posts::factory()->count(15)->create();
    }
}
