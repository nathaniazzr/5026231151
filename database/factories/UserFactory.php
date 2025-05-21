<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Hash;
>>>>>>> 57108d3 (Pertemuan 13)
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
<<<<<<< HEAD
=======
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
>>>>>>> 57108d3 (Pertemuan 13)
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public function definition()
=======
    public function definition(): array
>>>>>>> 57108d3 (Pertemuan 13)
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
<<<<<<< HEAD
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
=======
            'password' => static::$password ??= Hash::make('password'),
>>>>>>> 57108d3 (Pertemuan 13)
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
<<<<<<< HEAD
     *
     * @return static
     */
    public function unverified()
=======
     */
    public function unverified(): static
>>>>>>> 57108d3 (Pertemuan 13)
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
