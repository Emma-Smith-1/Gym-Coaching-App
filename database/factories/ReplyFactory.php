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
        $content = \Faker\Factory::create()->realText($maxNbChars =  50);
        $likes = random_int(0, 50);
        $date_posted = \Faker\Factory::create()->dateTimeBetween("-1 year", "now");
        $visibility = \Faker\Factory::create()->randomElement(['public', 'draft', 'private']);

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
