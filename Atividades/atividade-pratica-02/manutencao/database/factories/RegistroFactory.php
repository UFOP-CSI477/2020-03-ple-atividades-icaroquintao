<?php

namespace Database\Factories;

use App\Models\Registro;
use App\Models\Equipamento;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'user_id' =>User::factory(),
            'equipamento_id' =>Equipamento::factory(),
            'descricao' =>$this->faker->text($maxNbChars = 200),
            'datalimite' =>$this->faker->date($format = 'Y-m-d', $max = 'now'), 
            'tipo' =>$this->faker->numberBetween($min = 1, $max = 3) 
            
            
        ];
    }
}