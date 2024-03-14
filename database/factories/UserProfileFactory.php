<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id'));
        $name = \DB::table('users')->where('id', $user_id)->value('name');
        $username = \DB::table('users')->where('id', $user_id)->value('username');
        $bio = \Faker\Factory::create()->realText($maxNbChars = 200);
        $profile_pic = \Faker\Factory::create()->imageUrl();
        return [
            'name' => $name,
            'user_id' => $user_id,
            'username' => $username,
            'bio' => $bio,
            'profile_pic' => $profile_pic,
        ];
    }
}
