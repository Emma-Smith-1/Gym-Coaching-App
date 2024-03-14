<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $content = \Faker\Factory::create()->realText($maxNbChars = 400, $indexSize = 2);
        $date_posted = \Faker\Factory::create()->dateTimeBetween("-1 year", "now");
        $likes = random_int(0, 500);
        $visibility = \Faker\Factory::create()->randomElement(["public", "draft", "private"]);
        $user_id = random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id'));
        $post_id = random_int(\DB::table('posts')->min('id'), \DB::table('posts')->max('id'));

        return [
            "content" => $content,
            "date_posted" => $date_posted,
            "likes" => $likes,
            "visibility" => $visibility,
            "user_id" => $user_id,
            "post_id"=> $post_id,
        ];
    }
}
