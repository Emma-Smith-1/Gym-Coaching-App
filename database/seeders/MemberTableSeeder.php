<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Coach;
use Carbon\Carbon;
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
            $coaches_to_add = random_int(\DB::table('coaches')->min('id'), \DB::table('coaches')->max('id'));
            $member->coaches()->attach($coaches_to_add);
        });
    }
}
