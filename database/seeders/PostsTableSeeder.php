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
    public function run(): void
    {
        $post = new Posts;
        $post->title = "Seeding post";
        $post->content = "This is a test of getting seeding to work in the posts database";
        $post->creationDate = Carbon::now();
        $post->lastUpdated = Carbon::now();
        $post->category = "Test post";
        $post->visibility = "public";  // can also be draft or private
        $post->likes = 12;
        $post->comments = 3;
        $post->media = "https://example.com/image.jpg";
        $post->status = "approved";
        $post->save();

    }
}
