<?php

namespace Database\Factories;

use App\Models\Vaga;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VagaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vaga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->jobTitle,
            'empresa' => $this->faker->company,
            'email' => $this->faker->safeEmail,
            'descricao' => $this->faker->text($maxNbChars = 150) ,
            'local' => $this->faker->city,
            'data' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tipo' => $this->faker->randomElement($array = array ('T', 'E', 'E/T')),
            'area' => $this->faker->randomElement($array = array ('EC', 'EE', 'EP', 'SI')),
            'status' => $this->faker->randomElement($array = array ('1','2','3')),
            'link' => $this->faker->url,
            'user_id' => User::factory(),
            
            
        ];
    }
}
