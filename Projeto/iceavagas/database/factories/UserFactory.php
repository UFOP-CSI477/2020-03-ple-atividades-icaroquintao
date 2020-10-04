<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'matricula' => $this->faker->randomFloat($nbMaxDecimals = 5, $min = 11.11111, $max = 20.19999),
            'admin' => $this->faker->randomElement($array = array ('0')),
            'curso' => $this->faker->randomElement($array = array ('EC', 'EE', 'EP', 'SI')),
            'area' => $this->faker->randomElement($array = array ('T', 'E', 'E/T')),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
