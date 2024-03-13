<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Notification;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => fake()->numberBetween(1, 11),
            "post_id" => fake()->numberBetween(1, 5),
            "notification_type" => fake()->randomElement(['like','comment']),
            "notification_text" => fake()->realText($maxNbChars = 20),
            "notification_time" => fake()->dateTimeBetween("-1 year", "now"),
            "been_read" => fake()->randomElement(["read", "unread"]),
        ];
    }
}
