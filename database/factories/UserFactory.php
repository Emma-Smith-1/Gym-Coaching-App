<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $username = \Faker\Factory::create()->name();
        $name = \Faker\Factory::create()->name();
        $user_type = \Faker\Factory::create()->randomElement(['coach', 'member']);
        $email = \Faker\Factory::create()->unique()->safeEmail();
        $email_verified_at = now();
        $password = static::$password ??= Hash::make('password');
        $remember_token = Str::random(10);
        return [
            'username' => $username,
            'name' => $name,
            'user_type' => $user_type,
            'email' => $email,
            'email_verified_at' => $email_verified_at,
            'password' => $password,
            'remember_token' => $remember_token,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
