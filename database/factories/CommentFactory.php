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
        return [
            "content" => fake()->realText($maxNbChars = 400, $indexSize = 2),
            "date_posted" => fake()->dateTimeBetween("-1 year", "now"),
            "likes" => fake()->numberBetween(0, 500),
            "user_id" => 1,
            "post_id"=>1,
        ];
    }
}
