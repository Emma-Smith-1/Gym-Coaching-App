<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Member::factory()->count(95)->create()->each(function ($member) {
            $coach_to_add = random_int(\DB::table('coaches')->min('id'), \DB::table('coaches')->max('id'));

            if (\DB::table('coaches')->where('id', $coach_to_add)->exists()) {
                $member->coaches()->attach($coach_to_add);
            } else {
                \Illuminate\Support\Facades\Log::info("Member not attached to any coach. Coach $coach_to_add does not exist.");
            }
        });
    }
}
