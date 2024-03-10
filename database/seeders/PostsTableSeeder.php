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
        $p = new Posts;
        $p->title = "Seeding post";
        $p->content = "This is a test of getting seeding to work in the posts database";
        $p->creationDate = Carbon::now();
        $p->lastUpdated = Carbon::now();
        $p->category = "Test post";
        $p->visibility = "public";  // can also be draft or private
        $p->likes = 12;
        $p->comments = 3;
        $p->media = "https://example.com/image.jpg";
        $p->status = "approved";
        $p->save();

        Posts::factory()->count(10)->create();
    }
}
