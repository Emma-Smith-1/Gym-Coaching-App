<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Posts;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->realText($maxNbChars = 40, $indexSize = 2),
            "content" => fake()->realText($maxNbChars = 400, $indexSize = 2),
            "creation_date" => fake()->dateTimeBetween("-1 year", "now"),
            "last_updated" => fake()->dateTimeBetween("-1 year", "now"),
            "category" => fake()->randomElement(["Test post", "Technology", "Travel", "Food", null]),
            "visibility" => fake()->randomElement(["public", "draft", "private"]),
            "likes" => fake()->numberBetween(0, 500),
            "comments" => fake()->numberBetween(0, 100),
            "media" => fake()->imageUrl(),
            "status" => fake()->randomElement(["pending", "approved", "rejected"]),
            "user_id" => 1,
        ];
    }
}
