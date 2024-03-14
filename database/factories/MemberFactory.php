<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
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
        $years_member = random_int(0, 10);

        return [
            'user_id' => $user_id,
            'name' => $name,
            'username' => $username,
            'years_member' => $years_member,
        ];
    }
}
