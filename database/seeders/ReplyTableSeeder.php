<?php

namespace Database\Seeders;

use App\Models\Reply;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Reply::factory()->count(3)->create();
    }
}
