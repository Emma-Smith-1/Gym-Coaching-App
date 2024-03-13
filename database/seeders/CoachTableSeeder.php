<?php

namespace Database\Seeders;

use App\Models\Coach;
use App\Models\Member;
use Carbon\Carbon;
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
            $min_member_id = \DB::table('members')->min('id');
            $max_member_id = \DB::table('members')->max('id');
            $member_to_add = random_int($min_member_id, $max_member_id);

            if (\DB::table('members')->where('id', $member_to_add)->exists()) {
                $coach->members()->attach($member_to_add);
            } else {
                \Illuminate\Support\Facades\Log::info("Coach was not attached to any member. Generated member ID $member_to_add does not exist.");
        
            }
        });
    }
}
