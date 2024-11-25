<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        
     $user_id = random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id'));
     $post_id = random_int(\DB::table('posts')->min('id'), \DB::table('posts')->max('id'));
     $comment_id = random_int(\DB::table('comments')->min('id'), \DB::table('comments')->max('id'));
     $reply_id = random_int(\DB::table('replies')->min('id'), \DB::table('replies')->max('id'));
     $notification_type = \Faker\Factory::create()->randomElement(['like', 'comment']);
     $username = \DB::table('users')->where('id', $user_id)->value('name');
     $notification_text = \Faker\Factory::create()->realText($maxNbChars = 20);
     $notification_time = \Faker\Factory::create()->dateTimeBetween("-1 year", "now")->format('Y-m-d H:i:s');
     $been_read = \Faker\Factory::create()->randomElement(["read", "unread"]);
     $username = \DB::table('users')->where('id', $user_id)->value('username');

        return [
            "user_id" => $user_id,
            "post_id" => $post_id,
            "comment_id" => $comment_id,
            "reply_id" => $reply_id,
            "notification_type" => $notification_type,
            "notification_text" => $notification_text,
            "notification_time" => $notification_time,
            "been_read" => $been_read,
            "username" => $username,
        ];
    }
}
