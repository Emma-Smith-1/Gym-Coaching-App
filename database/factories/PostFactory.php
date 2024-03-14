<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = \Faker\Factory::create()->realText($maxNbChars = 40);
        $content = \Faker\Factory::create()->realText($maxNbChars = 400);
        $creation_date = \Faker\Factory::create()->dateTimeBetween("-1 year", "now");
        $last_updated = \Faker\Factory::create()->dateTimeBetween("-1 year", "now");
        $category = \Faker\Factory::create()->randomElement(["General", "Arm Workouts", "Leg Workouts", "HIIT", null]);
        $visibility = \Faker\Factory::create()->randomElement(["public", "draft", "private"]);
        $likes = random_int(0, 500);
        $comments = random_int(0, 100);
        $media = \Faker\Factory::create()->imageUrl();
        $status = \Faker\Factory::create()->randomElement(["pending", "approved", "rejected"]);
        $coach_id = random_int(\DB::table('coaches')->min('id'), \DB::table('coaches')->max('id'));

        return [
            "title" => $title,
            "content" => $content,
            "creation_date" => $creation_date,
            "last_updated" => $last_updated,
            "category" => $category,
            "visibility" => $visibility,
            "likes" => $likes,
            "comments" => $comments,
            "media" => $media,
            "status" => $status,
            "coach_id" => $coach_id,
        ];
    }
}
