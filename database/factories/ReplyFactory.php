<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reply;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $coach_id =  random_int(\DB::table('coaches')->min('id'), \DB::table('coaches')->max('id'));
        $comment_id = random_int(\DB::table('comments')->min('id'), \DB::table('comments')->max('id'));
        $coach_name = \DB::table('coaches')->where('id', $coach_id)->value('name');
        $content = fake()->realText($maxNbChars =  50);
        $likes = fake()->numberBetween(0, 50);
        $date_posted = fake()->dateTimeBetween("-1 year", "now");
        $visibility = fake()->randomElement(['public', 'draft', 'private']);

        return [
            'coach_id' => $coach_id,
            'comment_id' => $comment_id,
            'coach_name' => $coach_name,
            'content' => $content,
            'likes' => $likes,
            'date_posted' => $date_posted,
            'visibility' => $visibility,
        ];
    }
}
