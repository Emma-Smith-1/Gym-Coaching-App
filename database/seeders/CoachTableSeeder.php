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
        Coach::factory()->count(5)->create()->each(function ($coach) {
            $member_to_add = random_int(\DB::table('members')->min('id'), \DB::table('members')->max('id'));

            if (\DB::table('members')->where('id', $member_to_add)->exists()) {
                $coach->members()->attach($member_to_add);
            } else {
                \Illuminate\Support\Facades\Log::info("Coach not attached to any member. Member $member_to_add does not exist.");
            }
        });
    }
}
