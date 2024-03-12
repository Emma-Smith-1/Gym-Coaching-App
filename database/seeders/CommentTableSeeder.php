<?php

namespace Database\Seeders;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():
    {
        $c = new Comment;
        $c->user_id=1;
        $c->content = "test comment";
        $c->date_posted  = Carbon::now();
        $c->likes = 5;
        $c->save();

        Comment::factory()count(4)->create();
    }
}
